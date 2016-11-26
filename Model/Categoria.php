<?php 
class Categoria{

	private $_idCategoria;
	private $_nombreCategoria;


	function __construct($idCategoria,$nombreCategoria)
	{
		$this->_idCategoria = $idCategoria;
		$this->_nombreCategoria = $nombreCategoria;
	}

	public function getIdCategoria(){
		return $this->_idCategoria;
	}

	public function setIdCategoria($idCategoria){
		$this->_idCategoria = $idCategoria;
	}

	public function getNombreCategoria(){
		return $this->_nombreCategoria;
	}

	public function setNombreCategoria($nombreCategoria){
		$this->_nombreCategoria = $nombreCategoria;
	}

}


 ?>