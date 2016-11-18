<?php 

	require_once("../Service/GestionDB.php");

	class OperadorController{

		static function getListadoCambiosPeticion(){
			$jsonFile = file_get_contents("../Service/select_queries.json",FILE_USE_INCLUDE_PATH);
			$query = (json_decode($jsonFile,true))['cambios_peticion'];
			$db = GestionDB::getInstance();
			return $db->obtenerCambios($query);
		}

	}
 ?>