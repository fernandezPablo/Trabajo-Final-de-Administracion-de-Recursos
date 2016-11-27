<?php 

class Perfil{

	private $_idPerfil;
	private $_nombrePerfil;

	function __construct(){
	}

	public static function create(){
		$instance = new self();
		return $instance;
	}

	public function getIdPerfil(){
		return $this->_idPerfil;
	}

	public function setIdPerfil($idPerfil){
		$this->_idPerfil = $idPerfil;
		return $this;
	}

	public function getNombrePerfil(){
		return $this->_nombrePerfil;	
	}

	public function setNombrePerfil($nombrePerfil){
		$this->_nombrePerfil = $nombrePerfil;
		return $this;
	}

}

 ?>