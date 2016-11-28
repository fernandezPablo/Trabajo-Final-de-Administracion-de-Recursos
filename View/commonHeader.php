<nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
	<div class="container-fluid paddingLateral">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Gestión de Cambios</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#" ><?php echo $nombreUsuario; ?></a></li>
			<li><a href=<?php echo ($nombrePerfil === 'ADMINISTRADOR')? 'panelAdministrador.php?page=logout': "paneloperador.php?page=logout" ?>>Cerrar Sesion</a></li>
		</ul>
	</div>
</nav>