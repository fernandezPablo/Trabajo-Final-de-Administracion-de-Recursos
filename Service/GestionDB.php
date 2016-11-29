<?php 

require "../Model/Cambio.php";
require "../Model/Estado.php";
require "../Model/Impacto.php";
require "../Model/Categoria.php";
require "../Model/Prioridad.php";
require "../Model/SysExterno.php";

	class GestionDB{

		private $_host;
		private $_db;
		private $_user;
		private $_pass;
		private $_link;

		static $instance;


		function __construct(){
			$this->connect();
		}

		function __clone(){}

		function connect(){
			$this->configDb();
			$this->_link = new mysqli($this->_host,$this->_user,$this->_pass,$this->_db);
			if($this->_link->connect_error)
			{
				echo "No se pudo conectar a la base de datos: ".$this->_link->connect_error;
			}
		}

		function configDb(){
			$config = json_decode(
									file_get_contents("dbconfig.json",FILE_USE_INCLUDE_PATH),true
								);
			$this->_host = $config['host'];
			$this->_db = $config['db'];
			$this->_user = $config['user'];
			$this->_pass = $config['pass'];
		}

		public static function getInstance(){
			if(!(self::$instance instanceof self)){
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * [Obtienes cambios de la base de datos gestioncambios]
		 * @param  [string] $query [consulta a la base de datos]
		 * @param  [string] $param [parametros a vincular en la consulta]
		 * @return [array]        [devuelve un array con los cambios extraidos de la db]
		 */
		public function obtenerCambios($query,$param){

			$arrayCambios = array();
			$sentencia = $this->_link->prepare($query);
			$sentencia->bind_param('s',$param);
			if($sentencia->execute()){
				if($result = $sentencia->get_result()){
					$index = 0;
					while($unCambio = $result->fetch_assoc()){		
						$cambio = Cambio::create()
						->setIdCambio($unCambio['idCambio'])
						->setDescripcion($unCambio['descripcion'])
						->setMotivo($unCambio['motivo'])
						->setProposito($unCambio['proposito'])
						->setTiempoEstimado($unCambio['tiempoEstimado'])
						->setNombreSolicitante($unCambio['nombreSolicitante'])
						->setFechaDeVencimiento($unCambio['fechaDeVencimiento'])
						->setFechaDeImplementacion($unCambio['fechaDeImplementacion'])
						->setAsignadoA($unCambio['asignadoA'])
						->setObservacion($unCambio['observacion'])
						->setCategoria(new Categoria($unCambio['fk_idCategoria'],$unCambio['nombreCategoria']))
						->setImpacto(new Impacto($unCambio['fk_idImpacto'],$unCambio['nombreImpacto']))
						->setEstado(new Estado($unCambio['fk_idEstado'],$unCambio['nombreEstado']))
						->setPrioridad(new Prioridad($unCambio['fk_idPrioridad'],$unCambio['nombrePrioridad']))
						->setSysExterno(new SysExterno($unCambio['fk_idSysExterno'],$unCambio['nombreSysexterno']));

						$arrayCambios[$index] = $cambio;
						$index++;
					}
				}
			}
			return $arrayCambios;
		}

		public function obtenerTodosLosUsuarios($query) {
			$result = $this->_link->query($query);
			$index = 0;

			while($unUsuario = $result->fetch_assoc()){		
				$usuario = new Usuario($unUsuario['apellidoNombre'],$unUsuario['nombreUsuario'],$unUsuario['pass'],
							Perfil::create()->setIdPerfil($unUsuario['idPerfil'])->setNombrePerfil($unUsuario['nombrePerfil']));
				
				$arrayUsuarios[$index] = $usuario;
				$index++;
			}
			return $arrayUsuarios;
		}

		public function obtenerUsuario($nombreUsuario){
			$jsonString = file_get_contents("select_queries.json",FILE_USE_INCLUDE_PATH);
			$query = json_decode($jsonString,true)['unUsuario'];
			$sentencia = $this->_link->prepare($query);
			$sentencia->bind_param('s',$nombreUsuario);
			if($sentencia->execute()){
				if($resultado = $sentencia->get_result())
				{
					while ($fila = $resultado->fetch_assoc()) {
						$usuario = new Usuario($fila['apellidoNombre'],$fila['nombreUsuario'],$fila['pass'],
							Perfil::create()->setIdPerfil($fila['fk_idPerfil'])->setNombrePerfil($fila['nombrePerfil']));
					}
					return $usuario;
				}
			}
			return false;
		}

		/**
		 * [altaUsuario description]
		 * @param  Usuario $usuario usuario a dar de alta
		 * @return boolean         devuelve true si se guardo correctamente la info del usuario, caso contrario devuelve false
		 */
		public function altaUsuario($usuario){
			
			$jsonString = file_get_contents("insert_queries.json",FILE_USE_INCLUDE_PATH);
			$query = json_decode($jsonString,true)['altaUsuario'];
			$nombreUsuario = $usuario->getNombreUsuario();
			$pass = password_hash($usuario->getPass(),PASSWORD_BCRYPT);
			$ayn = $usuario->getApellidoYNombre();
			$idPerfil = $usuario->getPerfil()->getIdPerfil();
			$sentencia = $this->_link->prepare($query);
			if($pass){
				if(
					$sentencia->bind_param('ssss',$nombreUsuario,$pass,$ayn,$idPerfil)
					)
				{
				
					return $sentencia->execute();
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}

		public function bajaUsuario($nombreUsuario) {
			$jsonString = file_get_contents("delete_queries.json",FILE_USE_INCLUDE_PATH);
			$query = json_decode($jsonString,true)['bajaUsuario'];
			$sentencia = $this->_link->prepare($query);
			$sentencia->bind_param('s',$nombreUsuario);
			$sentencia->execute();
		}

	}

 ?>