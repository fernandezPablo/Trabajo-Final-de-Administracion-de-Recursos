<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Panel Administrador</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/style.css">
		<link rel="stylesheet" href="./assets/css/font-awesome.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
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

		<div class="container-fluid paddingLateral" >
			<div class="row">
				<div class="col-md-2">
					
					<div>
						<ul class="nav nav-pills nav-stacked">
							<li class="disabled">
								<p class="text-muted small">CAMBIOS</p>
							</li>
							<li class="active"><a href="panelAdministrador.php">Aprobados</a></li>
  							<li><a href="#">Anulados</a></li>
  							<li><a href="#">Planificados</a></li>
  							<li><a href="#">Realizados</a></li>
  							<li><a href="historial.php">Historial</a></li>
						</ul>

						<hr>

						<ul class="nav nav-pills nav-stacked">
							
							<li>
								<p class="text-muted small">USUARIOS</p>
							</li>

							<li><a href="#">Nuevos</a></li>
							<li><a href="#">Eliminar</a></li>
						</ul>
					</div>

					

				</div>

				<div class="col-md-10">
					<p>NUEVOS CAMBIOS</p>
					
					<table class="table table-hover panel-default panel">
						<thead>
							<tr>
								<th class="text-center small">ID</th>
								<th class="small">FECHA DE SOLICITUD</th>
								<th class="small">FECHA DE VENCIMIENTO</th>
								<th class="small">SOLICITANTE</th>
								<th class="small">ORIGEN</th>
								<th class="small">CATEGORIA</th>
								<th class="small">PRIORIDAD</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Probando</td>
								<td>Probando</td>
								<td>Probando</td>
								<td>Probando</td>
								<td>Probando</td>
								<td>Probando</td>
								<td>Probando</td>
								<td>

									<a href="">Detalles</a>
								</td>
							</tr>

							<tr>
								<td>Probando</td>
								<td>Probando</td>
								<td>Probando</td>
								<td>Probando</td>
								<td>Probando</td>
								<td>Probando</td>
								<td>Probando</td>
								<td>
									<a href="">Detalles</a>
								</td>
							</tr>

							
						</tbody>
					</table>

				</div>

			</div>
		</div>

		<!-- jQuery -->
		<!--<script src="//code.jquery.com/jquery.js"></script>-->
		<!-- Bootstrap JavaScript -->
		<script src="./assets/js/bootstrap.min.js" ></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		
	</body>
</html>