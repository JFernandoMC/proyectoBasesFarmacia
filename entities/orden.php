<?php
 class orden {

    private $cod_orden;
    private $cod_cliente;
    private $cod_producto;
    private $cantidad;
    private $cod_metodoPago;
    private $fecha;
    private $usuario;
    private $monto;
    
   



    public function __construct($cod_orden=null,$cod_cliente=null,$cod_producto=null,$cantidad=null,$cod_metodoPago=null,$fecha=null,$usuario=null,$monto=null)
    {
    	$this -> cod_orden = $cod_orden;
        $this->  cod_cliente = $cod_cliente;
        $this -> cod_producto = $cod_producto;
    	$this -> cantidad = $cantidad;
    	$this -> cod_metodoPago = $cod_metodoPago;
    	$this -> fecha = $fecha;
    	$this -> usuario = $usuario;
    	$this -> monto = $monto;
    }
    public function getCod_orden(){
        return $this->cod_orden;
    }

    public function setCod_orden($cod_orden){
        $this->cod_orden = $cod_orden;
    }

    public function getCod_cliente(){
        return $this->cod_cliente;
    }

    public function setCod_cliente($cod_cliente){
        $this->cod_cliente = $cod_cliente;
    }

    public function getCod_producto(){
        return $this->cod_producto;
    }

    public function setCod_producto($cod_producto){
        $this->cod_producto = $cod_producto;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }

    public function getCod_metodoPago(){
        return $this->cod_metodoPago;
    }

    public function setCod_metodoPago($cod_metodoPago){
        $this->cod_metodoPago = $cod_metodoPago;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getMonto(){
        return $this->monto;
    }

    public function setMonto($monto){
        $this->monto = $monto;
    }
}