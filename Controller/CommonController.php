<?php

class CommonController{

	public static function obtenerDatosPara($tipoDato){
		$db = GestionDB::getInstance();
		return $db->obtenerClasificacionDe($tipoDato);
	}

}

 ?>