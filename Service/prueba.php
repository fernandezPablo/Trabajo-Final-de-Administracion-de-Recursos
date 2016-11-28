<?php 
	include "../Controller/UsuarioController.php";

	$array = UsuarioController::listadoUsuarios();

	foreach ($array as $usuario) {
		# code...
		echo $usuario->getApellidoYNombre();
		echo "<br>";
		echo $usuario->getNombreUsuario();
		echo "<br>";
		echo $usuario->getPass();
		echo "<br>";
		echo $usuario->getPerfil()->getNombrePerfil();
	}
 ?>