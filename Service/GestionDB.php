<?php 

require_once("../Model/Cambio.php");
require_once("../Model/Estado.php");
require_once("../Model/Impacto.php");
require_once("../Model/Categoria.php");
require_once("../Model/Prioridad.php");
require_once("../Model/SysExterno.php");

	class GestionDB{

		private $host;
		private $db;
		private $user;
		private $pass;
		private $link;

		static $instance;


		function __construct(){
			$this->connect();
		}

		function __clone(){}

		function connect(){
			$this->configDb();
			$this->link = new mysqli($this->host,$this->user,$this->pass,$this->db);
			if($this->link->connect_error)
			{
				echo "No se pudo conectar a la base de datos: ".$this->link->connect_error;
			}
		}

		function configDb(){
			$config = json_decode(
									file_get_contents("dbconfig.json",FILE_USE_INCLUDE_PATH),true
								);
			$this->host = $config['host'];
			$this->db = $config['db'];
			$this->user = $config['user'];
			$this->pass = $config['pass'];
		}

		public static function getInstance(){
			if(!(self::$instance instanceof self)){
				self::$instance = new self();
			}
			return self::$instance;
		}

		public function obtenerCambios($query){
			$result = $this->link->query($query);
			$index = 0;
			while($unCambio = $result->fetch_assoc()){

				$nombreCategoria = ($this->obtenerInfoCambio($unCambio['fk_idCategoria'],'categoria','idCategoria'))['nombre'];
				$nombreImpacto = ($this->obtenerInfoCambio($unCambio['fk_idImpacto'],'impacto','idImpacto'))['nombre'];
				$nombreEstado = ($this->obtenerInfoCambio($unCambio['fk_idEstado'],'estado','idEstado'))['nombre'];
				$nombrePrioridad = ($this->obtenerInfoCambio($unCambio['fk_idPrioridad'],'prioridad','idPrioridad'))['nombre'];
				$nombreSysExterno = ($this->obtenerInfoCambio($unCambio['fk_idSysExterno'],'sysexterno','idSysExterno'))['nombre'];


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
				->setCategoria(new Categoria($unCambio['fk_idCategoria'],$nombreCategoria))
				->setImpacto(new Impacto($unCambio['fk_idImpacto'],$nombreImpacto))
				->setEstado(new Estado($unCambio['fk_idEstado'],$nombreEstado))
				->setPrioridad(new Prioridad($unCambio['fk_idPrioridad'],$nombrePrioridad))
				->setSysExterno(new SysExterno($unCambio['fk_idSysExterno'],$nombreSysExterno));

				$arrayCambios[$index] = $cambio;
				$index++;
			}
			return $arrayCambios;
		}

		public function obtenerInfoCambio($id,$tabla,$key){
			$query = "SELECT * FROM ".$tabla." WHERE ".$key." = ".$id." LIMIT 1";
			return ($this->link->query($query))->fetch_assoc();

		}

		public function obtenerUsuarios($query){

		}

	}

 ?>