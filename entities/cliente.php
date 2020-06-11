<?php
 class cliente {

    private $cedula;
    private $nombre;
    private $direccion;
    private $ciudad;
    private $sexo;
    private $telefono;
    



    public function __construct($cedula=null,$nombre=null,$direccion=null,$ciudad=null,$sexo=null,$telefono=null)
    {
    	$this -> cedula = $cedula;
    	$this -> nombre = $nombre;
    	$this -> direccion = $direccion;
    	$this -> ciudad = $ciudad;
    	$this -> sexo = $sexo;
    	$this -> telefono = $telefono;
    }
    public function getCedula(){
		return $this->cedula;
	}

	public function setCedula($cedula){
		$this->cedula = $cedula;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getCiudad(){
		return $this->ciudad;
	}

	public function setCiudad($ciudad){
		$this->ciudad = $ciudad;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}
}

    	
