<form action="" method="POST" role="form" class="form-horizontal"	>
	<p id="title" name="nuevousuario">NUEVO USUARIO</p>
	<hr>
	<div class="form-group">
		<label for="ayn" class="col-md-3 control-label">
			Apellido y Nombre
		</label>
		<div class="col-md-6">
			<input type="text" id="ayn" class="form-control" autofocus>
		</div>
	</div>
	<br>
	<div class="form-group">
		<label for="user" class="col-md-3 control-label">
			Usuario
		</label>
		<div class="col-md-6">
			<input type="text" id="user" class="form-control">
		</div>
	</div>
	<br>
	<div class="form-group">
		<label for="pass" class="col-md-3 control-label">
			Contraseña
		</label>
		<div class="col-md-6">
			<input type="password" id="pass" class="form-control">
		</div>
	</div>
	<br>
	<div class="form-group">
		<label for="pass_confirm" class="col-md-3 control-label">
			Confirmar Contraseña
		</label>
		<div class="col-md-6">
			<input type="password" id="pass_confirm" class="form-control">
		</div>
	</div>
	<br>
	<div class="form-group">
		<label for="perfil" class="col-md-3 control-label">
			Perfil
		</label>
		<div class="col-md-6">
			<select name="" id="input" class="form-control">
				<option value="">
					-- Seleccione el perfil --
				</option>
				<option value="">
					Operador
				</option>
				<option value="">
					Administrador
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