<?php
class Producto
{

    private $cod_producto;
    private $nombre;
    private $precioVenta;
    private $precioCompra;
    private $fechaVenci;
    private $cod_tipoProd;
    private $cod_Prove;
    private $cod_pres;
    private $cantidad;



    public function __construct($cod_producto = null, $nombre = null, $precioVenta = null, $precioCompra = null, $fechaVenci = null, $cod_tipoProd = null, $cod_Prove = null, $cod_pres = null, $cantidad = null)
    {
        $this->cod_producto = $cod_producto;
        $this->nombre = $nombre;
        $this->precioVenta = $precioVenta;
        $this->precioCompra = $precioCompra;
        $this->fechaVenci = $fechaVenci;
        $this->cod_tipoProd = $cod_tipoProd;
        $this->cod_Prove = $cod_Prove;
        $this->cod_pres = $cod_pres;
        $this->cantidad = $cantidad;
    }
    public function getCod_producto()
    {
        return $this->cod_producto;
    }

    public function setCod_producto($cod_producto)
    {
        $this->cod_producto = $cod_producto;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }

    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;
    }

    public function getPrecioCompra()
    {
        return $this->precioCompra;
    }

    public function setPrecioCompra($precioCompra)
    {
        $this->precioCompra = $precioCompra;
    }

    public function getFechaVenci()
    {
        return $this->fechaVenci;
    }

    public function setFechaVenci($fechaVenci)
    {
        $this->fechaVenci = $fechaVenci;
    }

    public function getCod_tipoProd()
    {
        return $this->cod_tipoProd;
    }

    public function setCod_tipoProd($cod_tipoProd)
    {
        $this->cod_tipoProd = $cod_tipoProd;
    }

    public function getCod_Prove()
    {
        return $this->cod_Prove;
    }

    public function setCod_Prove($cod_Prove)
    {
        $this->cod_Prove = $cod_Prove;
    }

    public function getCod_pres()
    {
        return $this->cod_pres;
    }

    public function setCod_pres($cod_pres)
    {
        $this->cod_pres = $cod_pres;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
}
