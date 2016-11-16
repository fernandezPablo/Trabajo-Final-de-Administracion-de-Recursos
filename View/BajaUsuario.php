<?php 
	include("../Model/Usuario.php");
	include("../Model/Perfil.php");


	$user1 = new Usuario("Martin Palermo","El_Loco9","titan",new Perfil(1,"Administrador"));

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

		<tr>
			<td><?php echo $user1->getNombreUsuario(); ?></td>
			<td><?php echo $user1->getApellidoYNombre(); ?></td>
			<td><?php echo $user1->getPerfil()->getNombrePerfil(); ?></td>
			<th>
				<a href="">Eliminar</a>
			</th>
		</tr>

	</tbody>
</table>
					
