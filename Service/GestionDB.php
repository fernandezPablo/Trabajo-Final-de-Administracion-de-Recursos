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
			return $arrayCambios;
		}

		public function obtenerUsuarios($query){

		}

	}

 ?>