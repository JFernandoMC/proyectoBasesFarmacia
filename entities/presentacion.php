<?php
 class presentacion {

    private $cod_presentacion;
    private $nombre;
  

	public function __construct($cod_presentacion=null,$nombre=null)
	{
    	$this -> cod_presentacion = $cod_presentacion;
    	$this-> nombre = $nombre;
    	
    } 
    public function getCod_presentacion(){
		return $this->cod_presentacion;
	}

	public function setCod_presentacion($cod_presentacion){
		$this->cod_presentacion = $cod_presentacion;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
}