<?php
 class ciudad {

    private $id_ciudad;
    private $nombre;
    private $pais;

  

    public function __construct($id_ciudad=null,$nombre=null,$pais=null)
    {
    	$this -> id_ciudad = $id_ciudad;
    	$this-> nombre = $nombre;
    	$this-> pais = $pais;

    	
    }
    public function getId_ciudad(){
		return $this->id_ciudad;
	}

	public function setId_ciudad($id_ciudad){
		$this->id_ciudad = $id_ciudad;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getPais(){
		return $this->pais;
	}

	public function setPais($pais){
		$this->pais = $pais;
	}  
    	
}