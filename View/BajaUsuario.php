<?php 
	require "../Controller/UsuarioController.php";

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
			<th>
				<a href=>Eliminar</a> <!--Debería llamar a una funcion bajaDeUsuario de ControladorUsuario()-->
			</th>
		</tr>

	<?php } ?>

		

	</tbody>
</table>
					
