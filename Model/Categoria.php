<?php 
class Categoria{

	private $idCategoria;
	private $nombreCategoria;


	function __construct($idCategoria,$nombreCategoria)
	{
		$this->idCategoria = $idCategoria;
		$this->nombreCategoria = $nombreCategoria;
	}

	public function getIdCategoria(){
		return $this->idCategoria;
	}

	public function setIdCategoria($idCategoria){
		$this->idCategoria = $idCategoria;
	}

	public function getNombreCategoria(){
		return $this->nombreCategoria;
	}

	public function setNombreCategoria($nombreCategoria){
		$this->nombreCategoria = $nombreCategoria;
	}

}


 ?>