<p id="title" name="nuevousuario">NUEVO USUARIO</p>
	<hr>
<?php 
	if(!isset($_POST['ayn'])):
 ?>
<form id="altaUsuario" action="./panelAdministrador.php?page=nuevousuario" method="POST" role="form" class="form-horizontal">
	<div class="form-group">
		<label for="ayn" class="col-md-3 control-label">
			Apellido y Nombre
		</label>
		<div class="col-md-6">
			<input type="text" id="ayn" name="ayn" class="form-control" autofocus>
		</div>
	</div>
	<br>
	<div class="form-group">
		<label for="user" class="col-md-3 control-label">
			Usuario
		</label>
		<div class="col-md-6">
			<input type="text" id="user" name="user" class="form-control">
		</div>
	</div>
	<br>
	<div class="form-group">
		<label for="pass" class="col-md-3 control-label">
			Contraseña
		</label>
		<div class="col-md-6">
			<input type="password" id="pass" name="pass" class="form-control">
		</div>
	</div>
	<br>
	<div class="form-group">
		<label for="pass_confirm" class="col-md-3 control-label">
			Confirmar Contraseña
		</label>
		<div class="col-md-6">
			<input type="password" id="pass_confirm" name="pass_confirm" class="form-control">
		</div>
	</div>
	<br>
	<div class="form-group">
		<label for="perfil" class="col-md-3 control-label">
			Perfil
		</label>
		<div class="col-md-6">
			<select name="perfil" id="perfil" class="form-control">
				<option value="0">
					-- Seleccione el perfil --
				</option>
				<option value="1">
					Administrador
				</option>
				<option value="2">
					Operador
				</option>
			</select>
		</div>
	</div>
	<br>
	<div class="form-group">
		<div class="col-md-9">
			<button type="submit" class="btn btn-primary pull-right">
				<i class="fa fa-check" aria-hidden="true"></i>
									&nbsp;CREAR
			</button>
		</div>
	</div>
</form>
<br><br>
<div id="alerta" class="col-md-8 col-md-offset-1 text-center alert"></div>
<?php else: 
	if(UsuarioController::altaDeUsuario($_POST['ayn'],$_POST['user'],$_POST['pass'],$_POST['perfil'])):	
?>
	<div class="text-center alert alert-success"> USUARIO REGISTRADO</div>
<?php else: ?>
	<div class="text-center alert alert-danger"> PROBLEMAS CON EL REGISTRO!</div>
<?php endif ?>
<?php endif ?>