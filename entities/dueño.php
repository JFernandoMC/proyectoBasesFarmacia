<?php
 class dueño {

    private $id_dueño;
    private $nombre;
  

    public function __construct($id_dueño=null,$nombre=null)
    {
    	$this -> id_dueño = $id_dueño;
    	$this-> nombre = $nombre;
    }
    public function getId_dueño(){
		return $this->id_dueño;
	}

	public function setId_dueño($id_dueño){
		$this->id_dueño = $id_dueño;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
}