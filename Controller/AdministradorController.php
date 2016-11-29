<?php 

	require_once "../Service/GestionDB.php";

class AdministradorController{

	const CAMBIOS_ACEPTADOS = 'aceptado';
	const CAMBIOS_APROBADOS = 'aprobado';
	const CAMBIOS_PLANIFICADOS = 'planficado';
	const CAMBIOS_REALIZADOS = 'realizado';
	const CAMBIOS_CERRADOS = 'cerrado';

	public static function getCambios($estado){
		
		$db = GestionDB::getInstance();
		$jsonString = file_get_contents("./../Service/select_queries.json",FILE_USE_INCLUDE_PATH);
		$query = json_decode($jsonString,true)['cambios'];
		
		return $db->obtenerCambios($query,$estado);
	}

	public static function historialDeCambio($idCambio) {
		$db = GestionDB::getInstance();
		$jsonString = file_get_contents("../../Service/select_queries.json", FILE_USE_INCLUDE_PATH);
		$query = json_decode($jsonString, true)['cambios'];

		return $db->obtenerCambios($query,$estado);
	}
}

 ?>