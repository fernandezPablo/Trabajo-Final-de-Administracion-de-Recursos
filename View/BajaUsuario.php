<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ELIMINAR USUARIO</title>

		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
		<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	
	</head>
	<body>

		<nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
			<div class="container-fluid paddingLateral">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Gestión de Cambios</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" >Daniel</a></li>
				</ul>
			</div>
		</nav>

		<div class="container-fluid paddingLateral">
			<div class="row">
				<div class="col-md-2">
					<div>
						<ul class="nav nav-pills nav-stacked">
							<li class="disabled">
								<p class="text-muted small">CAMBIOS</p>
							</li>

  							<li><a href="panelAdministrador.php">Aceptados</a></li>
  							<li><a href="#">Aprobados</a></li>
  							<li><a href="#">Planificados</a></li>
  							<li><a href="#">Realizados</a></li>
  							<li><a href="#">Cerrados</a></li>
  							<li><a href="historial.php">Historial</a></li>
						</ul>

						<hr>

						<ul class="nav nav-pills nav-stacked">
							
							<li>
								<p class="text-muted small">USUARIOS</p>
							</li>

							<li><a href="AltaUsuario.php">Nuevos</a></li>
							<li class="active"><a href="#">Eliminar</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-10">
					<p>ELIMINAR USUARIO</p>
					<hr>
					<div class="col-md-11">
						
						<table class="table table-condensed table-hover panel-default panel">
							<thead>
								<tr>
									<th class="small">USUARIO</th>
									<th class="small">APELLIDO Y NOMBRE</th>
									<th class="small">PERFIL</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>LunaSixto</td>
									<td>Luna, Sixto</td>
									<td>Operador</td>
									<th>
										<a href="">Eliminar</a>
									</th>
								</tr>

								<tr>
									<td>Josdan23</td>
									<td>Yapura, Jose Daniel</td>
									<td>Operador</td>
									<th>
										<a href="">Eliminar</a>
									</th>
								</tr>

								<tr>
									<td>fernadezP</td>
									<td>Fernandez, Pablo</td>
									<td>Administrador</td>
									<th>
										<a href="">Eliminar</a>
									</th>
								</tr>

							</tbody>
						</table>
					
					</div>

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