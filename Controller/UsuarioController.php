<?php 

require "../Service/GestionDB.php";
require "../Model/Usuario.php";
require "../Model/Perfil.php";

class UsuarioController{

	public static function altaDeUsuario($apellidoYNombre,$nombreUsuario,$pass,$idPerfil){
		$db = GestionDB::getInstance();
		return $db->altaUsuario(new Usuario($apellidoYNombre,$nombreUsuario,$pass,Perfil::create()->setIdPerfil($idPerfil)));
	}

	public static function listadoUsuarios() {
		$jsonFile = file_get_contents("../Service/select_queries.json",FILE_USE_INCLUDE_PATH);
		$query = json_decode($jsonFile,true)['todosLosUsuarios'];
		var_dump($query);
		$db = GestionDB::getInstance();
		return $db->obtenerTodosLosUsuarios($query);
	}

	public static function login($nombreUsuario,$pass){
		$db = GestionDB::getInstance();
		if($usuario = $db->obtenerUsuario($nombreUsuario)){
			$pass_hash = password_hash($pass,PASSWORD_BCRYPT);
			if(password_verify($pass,$usuario->getPass())){
				return true;
			}
		}
		return false;
	}

}

 ?>