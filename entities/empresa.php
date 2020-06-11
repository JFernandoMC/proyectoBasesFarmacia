<?php
 class empresa {

    private $nit;
    private $nombre;
  

    public function __construct($nit=null,$nombre=null)
    {
    	$this -> nit = $nit;
    	$this-> nombre = $nombre;
    	
    }
    public function getNit(){
		return $this->nit;
	}

	public function setNit($nit){
		$this->nit = $nit;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	}  