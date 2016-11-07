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
							<li class="active"><a href="panelAdministrador.php">Aceptados</a></li>
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
							<li><a href="BajaUsuario.php">Eliminar</a></li>
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

									<a href="#myModal" data-toggle="modal">Detalles</a>
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
									<a href="#myModal" data-toggle="modal">Detalles</a>
								</td>
							</tr>

							
						</tbody>
					</table>

				</div>

			</div>
		</div>
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  	<div class="modal-dialog" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        		<h4 class="modal-title" id="myModalLabel">Cambio #223</h4>
		      		</div>
		      		<div class="modal-body">
					<div class="row">
							<div class="col-md-5">
								<p class="text-info">SOLICITANTE</p>
								<p class="text-info">TIEMPO ESTIMADO</p>
								<p class="text-info">VENCIMIENTO</p>
								<p class="text-info">EQUIPO</p>
								<p class="text-info">IMPACTO</p>
								<p class="text-info">PRIORIDAD</p>
								<p class="text-info">CATEGORIA</p>
							</div>
							<div class="col-md-5 col-md-offset-1">
								<p class="text-right">	
									Luna, Sixto
								</p>
								<p class="text-right">
									5 dias
									<?php  ?>
								</p>
								<p class="text-right">
									30/10/16
									<?php  ?>
								</p>
								<p class="text-right">
									<?php  ?>
								</p>
								<p class="text-right">
									PC001
									<?php  ?>
								</p>
								<p class="text-right">
									BAJA
									<?php  ?>
								</p>
								<p class="text-right text-danger">
									ALTA
									<?php  ?>
								</p>
								<p class="text-right">
									Sin asignar
								</p>
							</div>
						</div>
						<br>
		        		<p  class="text-info">DESCRIPCION</p>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis dolore excepturi earum vitae qui a at provident recusandae repellendus fuga rem aliquid voluptates quod ea fugit harum, labore assumenda. Vitae.</p>
			        	<p class="text-info">MOTIVO</p>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum deserunt facere, accusamus magni voluptatem rem placeat quidem laborum iusto expedita, a odio quasi aliquid eius perspiciatis error modi hic dicta!</p>
			        	<p class="text-info">PROPOSITO</p>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur enim deleniti vero provident harum iste quae, et blanditiis, tempora laudantium quis cupiditate dolor. Odit ullam quisquam voluptatibus praesentium, repellendus ex!</p>
		      		</div>
		      		<div class="modal-footer">
			        	<button type="button" class="btn btn-default" >ANULAR</button>
			        	<button type="button" class="btn btn-primary">APROBAR</button>
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