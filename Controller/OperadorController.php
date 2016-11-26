<?php 

	require_once("../Service/GestionDB.php");

	class OperadorController{

		/**
		 * @return [array]
		 */
		static function getListadoCambiosPeticion(){
			$jsonFile = file_get_contents("../Service/select_queries.json",FILE_USE_INCLUDE_PATH);
			$query = (json_decode($jsonFile,true))['peticion'];
			$db = GestionDB::getInstance();
			return $db->obtenerCambios($query);
		}
		
		/**
		 * @param  [type]
		 * @return [type]
		 */
		static function getDetalleCambio($id){
			$jsonFile = file_get_contents("./../Service/select_queries.json",FILE_USE_INCLUDE_PATH);
			$query = str_replace("@", $id, (json_decode($jsonFile,true))['unCambioPeticion']);
			$db = GestionDB::getInstance();
			return $db->obtenerCambios($query);
		}

	}
 ?>