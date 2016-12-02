<?php 

	class OperadorController{

		const CAMBIOS_PETICION = 1;
		const CAMBIOS_ACEPTADOS = 2;
		const CAMBIOS_RECHAZADOS = 3;

		/**
		 * @return array Cambio
		 */
		public static function getListadoCambiosPeticion(){

			$db = GestionDB::getInstance();
			$jsonString = file_get_contents("./../Service/select_queries.json",FILE_USE_INCLUDE_PATH);
			//$query = json_decode($jsonString,true)['cambios'];
			$query = json_decode($jsonString,true)['peticion'];
			return $db->obtenerCambios($query,OperadorController::CAMBIOS_PETICION);
		}
		

		/**
		 * Busca un cambio dentro de un array que coincida con el id indicado
		 * @param  [int]   $id            identificador del cambio que se busca
		 * @param  [array] $arrayCambios  array en el que se busca el cambio
		 * @return [Cambio]               Devuelve el cambio dentro de un array de cambios el cual 
		 *                                coincide con el id solicitado
		 */
		public static function getDetalleCambio($id,$arrayCambios){
			foreach($arrayCambios as $cambio){
				if($cambio->getIdCambio() == $id){
					return $cambio;
				}
			}
			return false;
		}

		public static function aceptarCambio($idCambio,$idPrioridad,$idImpacto,$idCategoria,$nombreUsuario){
			$db = GestionDB::getInstance();
			if($usuario = $db->obtenerUsuario($nombreUsuario)){
				if($db->agregarUsuarioACambio($usuario->getIdUsuario(),$idCambio)){
					if($db->actualizarImpactoPrioridadCategoria($idCambio,$idPrioridad,$idImpacto,$idCategoria)){
						if($db->actualizarEstadoCambio(OperadorController::CAMBIOS_ACEPTADOS,$idCambio)){
							return true;
						}
					}
				}
			}
			return false;
		}

		public static function rechazarCambio($idCambio){
			$db = GestionDB::getInstance();
			if($db->actualizarEstadoCambio(OperadorController::CAMBIOS_RECHAZADOS,$idCambio)){
				return true;
			}
			return false;
		}

	}
 ?>