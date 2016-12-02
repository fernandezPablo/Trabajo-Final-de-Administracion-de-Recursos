<?php 

	require_once "../Service/GestionDB.php";

class AdministradorController{

	const CAMBIOS_ACEPTADOS = 2;
	const CAMBIOS_APROBADOS = 4;
	const CAMBIOS_ANULADOS = 5;
	const CAMBIOS_PLANIFICADOS = 6;
	const CAMBIOS_REALIZADOS = 7;
	const CAMBIOS_CERRADOS = 8;

	public static function getCambios($estado){
		
		$db = GestionDB::getInstance();
		$jsonString = file_get_contents("./../Service/select_queries.json",FILE_USE_INCLUDE_PATH);
		$query = json_decode($jsonString,true)['cambios'];
		
		return $db->obtenerCambios($query,$estado);
	}

	public static function infoDeCambio($idCambio) {
		$db = GestionDB::getInstance();
		$jsonString = file_get_contents("./../Service/select_queries.json", FILE_USE_INCLUDE_PATH);
		$query = json_decode($jsonString, true)['unCambioPeticion'];

		return $db->obtenerCambios($query,$idCambio);
	}

	public static function getDetalleCambio($idCambio){
		$db = GestionDB::getInstance();
		$jsonString = file_get_contents("./../Service/select_queries.json", FILE_USE_INCLUDE_PATH);
		$query = json_decode($jsonString, true)['unCambio'];

		return $db->obtenerCambios($query,$idCambio)[0];	
	}

	public static function seguimientoCambio($idCambio) {
		$db = GestionDB::getInstance();
		$jsonString = file_get_contents("./../Service/select_queries.json", FILE_USE_INCLUDE_PATH);
		$query = json_decode($jsonString,true)['historial'];

		return $db->obtenerSeguimiento($query,$idCambio);
	}

	public static function historial($mes, $estado) {
		$db = GestionDB::getInstance();
		$jsonString = file_get_contents("./../Service/select_queries.json", FILE_USE_INCLUDE_PATH);
		$query = json_decode($jsonString, true)['informe'];

		return $db->obtenerCambiosInforme($query, $mes, $estado);
	}
	public static function aprobarCambio($id){
		$db = GestionDB::getInstance();
		return $db->actualizarEstadoCambio(AdministradorController::CAMBIOS_APROBADOS,$id);
	}

	public static function cerrarCambio($id){
		$db = GestionDB::getInstance();
		return $db->actualizarEstadoCambio(AdministradorController::CAMBIOS_CERRADOS,$id);
	}


	public static function anularCambio($idCambio,$observacion){
		$db = GestionDB::getInstance();
		if($db->actualizarEstadoCambio(AdministradorController::CAMBIOS_ANULADOS,$idCambio)){
			return $db->observar($observacion,$idCambio);
		}
		return false;
	}

	public static function cambioRealizado($idCambio){
		$db = GestionDB::getInstance();
		return $db->actualizarEstadoCambio(AdministradorController::CAMBIOS_REALIZADOS,$idCambio);
	}

	public static function planificarCambio($idCambio,$fechaDeImplementacion,$asignadoA){
		$db = GestionDB::getInstance();
		if($db->asignarFechaImplementacionYResponsable($idCambio,$fechaDeImplementacion,$asignadoA)){
			if($db->actualizarEstadoCambio(AdministradorController::CAMBIOS_PLANIFICADOS,$idCambio)){
				return true;
			}
		}
		return false;
	}

	public static function comprobarPlanificados(){
		$db = GestionDB::getInstance();
		$jsonString = file_get_contents("../Service/select_queries.json",FILE_USE_INCLUDE_PATH);
		$query = json_decode($jsonString,true)['cambios'];
		if($arrayCambios = $db->obtenerCambios($query,AdministradorController::CAMBIOS_PLANIFICADOS)){
			date_default_timezone_set("America/Argentina/Tucuman");
			$fechaActual = strtotime(date('Y-m-d H:i:s'));
			foreach($arrayCambios as $cambio){
				if($fechaActual > strtotime($cambio->getFechaDeImplementacion())){
					AdministradorController::cambioRealizado($cambio->getIdCambio());
				}
			}
		}
	}
}

 ?>