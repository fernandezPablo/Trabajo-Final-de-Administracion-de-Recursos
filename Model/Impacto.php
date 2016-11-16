<?php 
class Impacto{

	private $idImpacto;
	private $nombreImpacto;


	function __construct($idImpacto,$nombreImpacto)
	{
		$this->idImpacto = $idImpacto;
		$this->nombreImpacto = $nombreImpacto;
	}

	public function getIdImpacto(){
		return $this->idImpacto;
	}

	public function setIdImpacto($idImpacto){
		$this->idImpacto = $idImpacto;
	}

	public function getNombreImpacto(){
		return $this->nombreImpacto;
	}

	public function setNombreImpacto($nombreImpacto){
		$this->nombreImpacto = $nombreImpacto;
	}

}


 ?>