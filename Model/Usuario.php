<?php 
class Usuario{

	private $_idUsuario;
	private $_apellidoYNombre;
	private $_nombreUsuario;
	private $_pass;
	private $_perfil;

	function __construct($apellidoYNombre,$nombreUsuario,$pass,$perfil)
	{
		$this->_apellidoYNombre = $apellidoYNombre;
		$this->_nombreUsuario = $nombreUsuario;
		$this->_pass = $pass;
		$this->_perfil = $perfil;
	}

	public function getIdUsuario(){
		return $this->_idUsuario;
	}

	public function setIdUsuario($idUsuario){
		$this->_idUsuario = $idUsuario;
	}

	public function getApellidoYNombre(){
		return $this->_apellidoYNombre;
	}

	public function setApellidoYNombre($apellidoYNombre){
		$this->_apellidoYNombre = $apellidoYNombre;
	}

	public function getNombreUsuario(){
		return $this->_nombreUsuario;
	}

	public function setNombreUsuario($nombreUsuario){
		$this->_nombreUsuario = $nombreUsuario;
	}

	public function getPass(){
		return $this->_pass;
	}

	public function setPass($pass){
		$this->_pass = $pass;
	}

	public function getPerfil(){
		return $this->_perfil;
	}

	public function setPerfil($perfil){
		$this->_perfil = $perfil;
	}

}

 ?>