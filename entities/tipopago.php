<?php
 class tipopago {

    private $cod_tipopago;
    private $nombre;
  

    public function __construct($cod_tipopago=null,$nombre=null)
    {
    	$this -> cod_tipoPago = $cod_tipopago;
    	$this-> nombre = $nombre;
    	
    }  
    	public function getCod_tipopago(){
		return $this->cod_tipopago;
	}

	public function setCod_tipopago($cod_tipopago){
		$this->cod_tipopago = $cod_tipopago;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
}