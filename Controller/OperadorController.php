<?php 

	class OperadorController{

		/**
		 * @return array Cambio
		 */
		static function getListadoCambiosPeticion(){
			$db = GestionDB::getInstance();
			$jsonString = file_get_contents("./../Service/select_queries.json",FILE_USE_INCLUDE_PATH);
			$query = json_decode($jsonString,true)['cambios'];
			return $db->obtenerCambios($query,'peticion');
		}
		
		/**
		 * @param  int $id identificador del cambio
		 * @return array Cambio
		 */
		static function getDetalleCambio($id){
			$jsonFile = file_get_contents("./../Service/select_queries.json",FILE_USE_INCLUDE_PATH);
			$query = (json_decode($jsonFile,true))['unCambioPeticion'];
			$db = GestionDB::getInstance();
			return $db->obtenerCambios($query,$id);
		}

	}
 ?>