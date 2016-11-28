<?php 
	require "../Controller/UsuarioController.php";

	if(isset($_COOKIE['user']) && isset($_COOKIE['hash']) && isset($_COOKIE['perfil'])){
		if($_COOKIE['perfil'] === 'ADMINISTRADOR'){
			UsuarioController::redirect('ADMINISTRADOR');
		}
		else if($_COOKIE['perfil'] === 'OPERADOR'){
			UsuarioController::redirect('OPERADOR');
		}
	}
 ?>
<!DOCTYPE html>
<html lang="ES">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LOGIN - SISTEMA DE GESTION DE CAMBIOS</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/style.css">
		<link rel="stylesheet" href="./assets/css/font-awesome.min.css">

	</head>
	<body>
		<div class="container-fluid centrarVertical">
			<div class="row">
				<div class="col-md-4 col-md-offset-2">
					<h1>Bienvenido</h1>
					<h4>Sistema de Gestion de Cambios</h4>
				</div>

				<div class="col-md-3 col-md-offset-1 panel panel-default " id="login">
					<form action="login.php" method="POST" role="form">
						<div class="form-group">
							<i class="fa fa-user-o" aria-hidden="true"></i>
							<label for="user" class="text-primary">Usuario</label>
							<input type="text" class="form-control" id="user" name="user" autofocus="">
							<br>
							<i class="fa fa-key" aria-hidden="true"></i>
							<label for="pass" class="text-primary">Contraseña</label>
							<input type="password" class="form-control" id="pass" name="pass">
						</div>
							<br>
							<button type="INGRESAR" class="btn btn-primary btn-block">INGRESAR</button>
					</form>
					<br>
					<?php 
						if(isset($_POST['user']) && isset($_POST['pass'])){
							if(UsuarioController::login($_POST['user'],$_POST['pass'])){
								echo "<div class='text-center alert alert-success'>LOGIN EXITOSO!</div>";
							}
							else{
								echo "<div class='text-center alert alert-danger'>ERROR: LOGIN INCORRECTO!</div>";
							}
						}
					 ?>
				</div>
			</div>
		</div>

		<nav class="navbar-fixed-bottom" role="navigation">
			<div class="container">
				<ul class="nav navbar-nav centrarHorizontal">
					<li>
						<p class="text-muted">Administración de Recursos</p>

					</li>
					<li>
						<p class="text-muted">-Trabajo Integrador</p>
					</li>
				</ul>
			</div>
		</nav>
		<!-- jQuery -->
		<script src="./assets/js/jquery.min.js"/>
		<!-- Bootstrap JavaScript -->
		<script src="./assets/js/bootstrap.min.js"/>


	</body>
</html>