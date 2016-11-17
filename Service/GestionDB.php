<?php 

require_once("../Model/Cambio.php");

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
			$this->link = new mysqli_connect(	
												$this->host,
												$this->user,
												$this->pass,
												$this->db
											);
			if($this->link->mysqli_errno)
			{
				echo "No se pudo conectar a la base de datos: ".$this->link->connect_error;
			}
		}

		function configDb(){
			$config = file_get_contents("./dbconfig.json");
			$this->host = $config['host'];
			$this->db = $config['db'];
			$this->user = $config['user'];
			$this->pass = $config['pass'];
		}

		function getInstance(){
			if(!(self::$instance instanceof self)){
				self::$instance = new self();
			}
			return self::$instance;
		}

		function obtenerCambios($query){
			$result = $link->query($query);
			while($unCambio = $result->fetch_assoc()){

				$nombreCategoria = ($this->obtenerInfoCambio($unCambio['idCategoria'],'categoria','idCategoria'))['nombre'];
				$nombreImpacto = ($this->obtenerInfoCambio($unCambio['idImpacto'],'impacto','idImpacto'))['nombre'];
				$nombreEstado = ($this->obtenerInfoCambio($unCambio['idEstado'],'estado','idEstado'))['nombre'];
				$nombrePrioridad = ($this->obtenerInfoCambio($unCambio['idPrioridad'],'prioridad','idPrioridad'))['nombre'];
				$nombreSysExterno = ($this->obtenerInfoCambio($unCambio['idSysExterno'],'sysexterno','idSysExterno'))['nombre'];


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
				->setObservacion($unCambio['observacion']);



			}
		}

		function obtenerInfoCambio($id,$tabla,$key){
			$query = "SELECT * FROM ".$tabla." WHERE ".$key." = ".$id." LIMIT 1";
			return ($this->link->query($query))->fetch_assoc();

		}

		function obtenerUsuarios($query){

		}

	}

 ?>