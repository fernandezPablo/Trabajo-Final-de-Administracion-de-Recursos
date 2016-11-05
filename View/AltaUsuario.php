<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ALTA DE USUARIO</title>

		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
		<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	
	</head>
	<body>
		<nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
			<div class="container" id="navbar">
				<a class="navbar-brand" href="#">Gestión de Cambios</a>
				<ul class="nav navbar-nav pull-right">
					<li class="active ">
						<a href="#" class="">Usuario</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<div>
						<ul class="nav nav-pills nav-stacked">
							<li class="disabled">
								<p class="text-muted">CAMBIOS</p>
							</li>
							<li><a href="#">Aprobados</a></li>
  							<li><a href="#">Anulados</a></li>
  							<li class="active"><a href="#">Planificados</a></li>
  							<li><a href="#">Realizados</a></li>
  							<li><a href="#">Historial</a></li>
						</ul>

						<hr>

						<ul class="nav nav-pills nav-stacked">
							
							<li>
								<p class="text-muted">USUARIOS</p>
							</li>

							<li><a href="#">Nuevos</a></li>
							<li><a href="#">Eliminar</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-10">
					<form action="" method="POST" role="form" class="form-horizontal"	>
						<h2>Nuevo Usuario</h2>
						<br><br>
						<div class="form-group">
							<label for="ayn" class="col-md-2 control-label">
								Apellido y Nombre
							</label>
							<div class="col-md-6">
								<input type="text" id="ayn" class="form-control" autofocus>
							</div>
						</div>
						<br>
						<div class="form-group">
							<label for="user" class="col-md-2 control-label">
								Usuario
							</label>
							<div class="col-md-6">
								<input type="text" id="user" class="form-control">
							</div>
						</div>
						<br>
						<div class="form-group">
							<label for="pass" class="col-md-2 control-label">
								Contraseña
							</label>
							<div class="col-md-6">
								<input type="password" id="pass" class="form-control">
							</div>
						</div>
						<br>
						<div class="form-group">
							<label for="pass_confirm" class="col-md-2 control-label">
								Confirmar Contraseña
							</label>
							<div class="col-md-6">
								<input type="password" id="pass_confirm" class="form-control">
							</div>
						</div>
						<br>
						<div class="form-group">
							<label for="perfil" class="col-md-2 control-label">
								Perfil
							</label>
							<div class="col-md-6">
								<select name="" id="input" class="form-control">
									<option value="">
										-- Seleccione el perfil --
									</option>
									<option value="">
										Operador
									</option>
									<option value="">
										Administrador
									</option>
								</select>
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="col-md-8">
								<button type="submit" class="btn btn-primary pull-right">
									<i class="fa fa-check" aria-hidden="true"></i>
									&nbsp;CREAR
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="./assets/js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="./assets/js/bootstrap.min.js" ></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

	</body>
</html>