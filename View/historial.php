<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Historial</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/style.css">

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
  							<li class="active"><a href="historial.php">Historial</a></li>
						</ul>

						<hr>

						<ul class="nav nav-pills nav-stacked">
							
							<li>
								<p class="text-muted small">USUARIOS</p>
							</li>

							<li><a href="AltaUsuario.php">Nuevos</a></li>
							<li><a href="BajaUsuario.php">Eliminar</a></li>
						</ul>
					</div>
				</div>


				<div class="col-md-10">
					<p>HISTORIAL</p>
					<hr>
					<div class="row">
						<div class="col-md-12">

							<form class="form-horizontal" action="" method="POST" role="form">

								<div class="form-group">

									<div class="col-md-4">
										<input type="text" class="form-control" id="buscar" placeholder="Introducir id de cambio">
									</div>

									<div class="col-md-2">
										<button type="submit" class="btn btn-primary ">BUSCAR</button>
									</div>
								</div>
									
							</form>

						</div>
					</div> <!--ROW-->
					
					<div class="row"> <!--RESULTADOS-->
						<div class="col-md-12">
							<div class="panel panel-default paddingLateral ">
								<div class="panel-body">
									<p>SOLICITANTE:</p>
									<p>ORIGEN:</p>
									<p>PRIORIDAD:</p>
										
									<br>

									<table class="table table-hover table-condensed table-bordered ">
										<thead>
											<tr>
												<th class="text-center small">FECHA</th>
												<th class="text-center small">ESTADO</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center">30/10/16</td>
												<td class="text-center">APROBADO</td>
											</tr>
											<tr>
												<td class="text-center">30/10/16</td>
												<td class="text-center">APROBADO</td>
											</tr>
											<tr>
												<td class="text-center">30/10/16</td>
												<td class="text-center">APROBADO</td>
											</tr>
											<tr>
												<td class="text-center">30/10/16</td>
												<td class="text-center">APROBADO</td>
											</tr>
											<tr>
												<td class="text-center">30/10/16</td>
												<td class="text-center">APROBADO</td>
											</tr>
											<tr>
												<td class="text-center">30/10/16</td>
												<td class="text-center">APROBADO</td>
											</tr>
										</tbody>
									</table>

								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>




		<!-- jQuery -->
		<!--<script src="//code.jquery.com/jquery.js"></script>-->
		<!-- Bootstrap JavaScript -->
		<script src="./assests/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>