<?php
 class tipoproducto {

    private $cod_tipoProd;
    private $nombre;
  

    public function __construct($cod_tipoProd=null,$nombre=null)
    {
    	$this->cod_tipoProd = $cod_tipoProd;
    	$this->nombre = $nombre;
    	
    }   
        public function getCod_tipoProd(){
        return $this->cod_tipoProd;
    }

    public function setCod_tipoProd($cod_tipoProd){
        $this->cod_tipoProd = $cod_tipoProd;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
}