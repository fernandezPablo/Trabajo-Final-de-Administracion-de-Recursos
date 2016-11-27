<?php 

require "../Service/GestionDB.php";
require "../Model/Usuario.php";
require "../Model/Perfil.php";

class UsuarioController{

	public static function altaDeUsuario($apellidoYNombre,$nombreUsuario,$pass,$idPerfil){
		$db = GestionDB::getInstance();
		return $db->altaUsuario(new Usuario($apellidoYNombre,$nombreUsuario,$pass,Perfil::create()->setIdPerfil($idPerfil)));
	}

}

 ?>