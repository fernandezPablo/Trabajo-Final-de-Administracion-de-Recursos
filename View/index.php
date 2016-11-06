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

	</head>
	<body>
		<div class="container-fluid centrarVertical">
			<div class="row">
				<div class="col-md-4 col-md-offset-2">
					<h1>Bienvenido</h1>
					<h4>Sistema de Gestion de Cambios</h4>
				</div>

				<div class="col-md-3 col-md-offset-1 panel panel-default well" id="login">
					<form action="#" method="POST" role="form">
						<div class="form-group">
							<label for="user" class="text-primary">Usuario</label>
							<input type="text" class="form-control" id="user" placeholder="">
							<br>
							<label for="pass" class="text-primary">Contraseña</label>
							<input type="password" class="form-control" id="pass" placeholder="">
						</div>
							<br>
							<button type="INGRESAR" class="btn btn-primary btn-block">INGRESAR</button>
					</form>
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