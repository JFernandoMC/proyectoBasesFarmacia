<?php
 class usuario {

    private $cedula;
    private $usuario;
    private $nombre;
    private $direccion;
    private $telefono;
    private $sexo;
    private $rol;
    private $contrasena;
    private $cod_dueno;
    private $cod_ciudad;



    public function __construct($cedula=null,$usuario=null,$nombre=null,$direccion=null,$telefono=null,$sexo=null,$rol=null,$contrasena=null,$cod_dueno=null,$cod_ciudad=null)
    {
    	$this -> cedula = $cedula;
    	$this-> usuario = $usuario;
    	$this -> nombre = $nombre;
    	$this -> direccion = $direccion;
    	$this -> telefono = $telefono;
    	$this -> sexo = $sexo;
    	$this -> rol = $rol;
    	$this -> contrasena = $contrasena;
    	$this -> cod_dueno = $cod_dueno;
    	$this -> cod_ciudad = $cod_ciudad;
    }
    public function getCedula(){
		return $this->cedula;
	}

	public function setCedula($cedula){
		$this->cedula = $cedula;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
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

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getRol(){
		return $this->rol;
	}

	public function setRol($rol){
		$this->rol = $rol;
	}

	public function getContrasena(){
		return $this->contrasena;
	}

	public function setContrasena($contrasena){
		$this->contrasena = $contrasena;
	}

	public function getCod_dueno(){
		return $this->cod_dueno;
	}

	public function setCod_dueno($cod_dueno){
		$this->cod_dueno = $cod_dueno;
	}

	public function getCod_ciudad(){
		return $this->cod_ciudad;
	}

	public function setCod_ciudad($cod_ciudad){
		$this->cod_ciudad = $cod_ciudad;
	}
}
