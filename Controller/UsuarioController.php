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
		$db = GestionDB::getInstance();
		return  $db->obtenerTodosLosUsuarios($query);
	}

	public static function login($nombreUsuario,$pass){
		$db = GestionDB::getInstance();
		if($usuario = $db->obtenerUsuario($nombreUsuario)){
			if(password_verify($pass,$usuario->getPass())){	
				setcookie('user',$usuario->getNombreUsuario(),time()+(60*60));
				setcookie('hash',$usuario->getpass(),time()+(60*60));
				setcookie('perfil',$usuario->getPerfil()->getNombrePerfil(),time()+(60*60));
				UsuarioController::redirect($usuario->getPerfil()->getNombrePerfil());
			}
		}
		return false;
	}


	public static function eliminarUsuario($idUsuario) {

		$db = GestionDB::getInstance();

		$db->bajaUsuario($idUsuario);
	}
		
	public static function logout(){
		setcookie('user','',time()-(60*60));
		setcookie('hash','',time()-(60*60));
		setcookie('perfil','',time()-(60*60));
		UsuarioController::redirect('LOGIN');
	}


	public static function verificarUsuario($nombreUsuario,$hash,$nombrePerfil){
		$db = GestionDB::getInstance();
		if($usuario = $db->obtenerUsuario($nombreUsuario)){
			if($usuario->getpass() == $hash){
				if($usuario->getPerfil()->getNombrePerfil() == $nombrePerfil){
					return true;
				}
				else{
					UsuarioController::redirect($usuario->getPerfil()->getNombrePerfil());
				}
			}
			else{
				UsuarioController::redirect("LOGIN");
			}
		}
		return false;
	}

	public static function redirect($nombrePerfil){
		switch ($nombrePerfil) {
			case 'ADMINISTRADOR':
				echo "<script type=text/javascript> window.location.href= './panelAdministrador.php' </script>";
				break;	
			case 'OPERADOR':
				echo "<script type=text/javascript> window.location.href= './paneloperador.php' </script>";
				break;
			default:
				echo "<script type=text/javascript> window.location.href= './login.php' </script>";
		}
	}
}

 ?>