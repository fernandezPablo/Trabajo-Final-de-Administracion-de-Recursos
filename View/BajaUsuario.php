<?php 
	if(isset($_GET['user'])){
		UsuarioController::eliminarUsuario($_GET['user']);
	}

 ?>
<p id="title" name="eliminarusuario">ELIMINAR USUARIO</p>
<hr>
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

	<?php 
		$arrayUsuarios = UsuarioController::listadoUsuarios();
		foreach ($arrayUsuarios as $usuario) {
	 ?>
		<tr>
			<td><?php echo $usuario->getNombreUsuario(); ?></td>
			<td><?php echo $usuario->getApellidoYNombre(); ?></td>
			<td><?php echo $usuario->getPerfil()->getNombrePerfil(); ?></td>
			<td>
				<a href=<?php echo "./panelAdministrador.php?page=eliminarusuario&user=".$usuario->getIdUsuario(); ?>>Eliminar</a> <!--Debería llamar a una funcion bajaDeUsuario de ControladorUsuario()-->
			</td>
		</tr>

	<?php } ?>

		

	</tbody>
</table>
					
