<?php 
class Impacto{

	private $_idImpacto;
	private $_nombreImpacto;


	function __construct($idImpacto,$nombreImpacto)
	{
		$this->_idImpacto = $idImpacto;
		$this->_nombreImpacto = $nombreImpacto;
	}

	public function getIdImpacto(){
		return $this->_idImpacto;
	}

	public function setIdImpacto($idImpacto){
		$this->_idImpacto = $idImpacto;
	}

	public function getNombreImpacto(){
		return $this->_nombreImpacto;
	}

	public function setNombreImpacto($nombreImpacto){
		$this->_nombreImpacto = $nombreImpacto;
	}

}


 ?>