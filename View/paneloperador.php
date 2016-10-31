<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
		
		
	</head>
	<body>

		<nav class="navbar navbar-default navbar-fixed-top" role="navigation  ">
			<div class="container">
				<a class="navbar-brand" href="#">Title</a>
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Link</a>
					</li>
				</ul>
			</div>
		</nav>


		<div class="container-fluid margenTopContainer">
	
			<div class="row"> <!--FILA2-->
				<div class="col-md-5 col-md-offset-1">
					<h4>Solicitudes de Cambio</h4>
					<div class="table-striped table-responsive panel panel-default">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center">Origen</th>
									<th class="text-center">Solicitante</th>
									<th class="text-center">Vencmiento</th>
									<th class="text-center">Prioridad</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">
										Proyectos
										<?php 

										 ?>
									</td>
									<td class="text-center">
										Luna, Sixto
										<?php 

										 ?>
									</td>
									<td class="text-center">
										31/10/16
										<?php 

										 ?>
									</td>
									<td class="text-center">
										ALTA
										<?php 

										 ?>
									</td>

								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-5 ">
					<h4>Información del Cambio</h4>
					<div class="panel panel-default well">

						<div class="row"> <!--FILA2-->
							<div class="col-md-12">
								<p class="text-info">DESCRIPCION</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minus earum sed tenetur. Labore inventore doloremque veritatis, eum magni nostrum quo amet quod velit animi fugit ipsam temporibus maiores voluptatem!</p>
								<p class="text-info">MOTIVO</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sint magnam quas vitae, perspiciatis, sit quibusdam laboriosam temporibus, nesciunt doloribus omnis cum, repellendus nobis illum. Error id incidunt, natus consequuntur.</p>
								<p class="text-info">PROPOSITO</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque architecto eos, earum inventore, mollitia suscipit ea hic quo, sed perspiciatis natus. Numquam deleniti illo maxime sequi qui dolor, atque voluptatem.</p>
							</div>							
						</div>
						<div class="row">
							<div class="col-md-5">
								<p class="text-info">SOLICITANTE</p>
								<p class="text-info">TIEMPO ESTIMADO</p>
								<p class="text-info">VENCIMIENTO</p>
								<p class="text-info">EQUIPO</p>
								<p class="text-info">IMPACTO</p>
								<p class="text-info">PRIORIDAD</p>
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
								
							</div>
						</div>
							<div class="row">
								<br>
								<div class="col-md-6 pull-right">
									<button type="button" class="btn btn-default">RECHAZAR</button>
									<button type="button" class="btn btn-primary">ACEPTAR</button>
								</div>
							</div>
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