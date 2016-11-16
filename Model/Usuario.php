<?php 
class Usuario{

	private $idUsuario;
	private $apellidoYNombre;
	private $nombreUsuario;
	private $pass;
	private $perfil;

	function __construct($apellidoYNombre,$nombreUsuario,$pass,$perfil)
	{
		$this->apellidoYNombre = $apellidoYNombre;
		$this->nombreUsuario = $nombreUsuario;
		$this->pass = $pass;
		$this->perfil = $perfil;
	}

	public function getApellidoYNombre(){
		return $this->apellidoYNombre;
	}

	public function setApellidoYNombre($apellidoYNombre){
		$this->apellidoYNombre = $apellidoYNombre;
	}

	public function getNombreUsuario(){
		return $this->nombreUsuario;
	}

	public function setNombreUsuario($nombreUsuario){
		$this->nombreUsuario = $nombreUsuario;
	}

	public function getpass(){
		return $this->pass;
	}

	public function setPass($pass){
		$this->pass = $pass;
	}

	public function getPerfil(){
		return $this->perfil;
	}

	public function setPerfil($perfil){
		$this->perfil = $perfil;
	}

}

 ?>