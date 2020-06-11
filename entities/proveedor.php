<?php
class Proveedor
{

    private $cedula;
    private $nombre;
    private $direccion;
    private $telefono;
    private $ciudad;
    private $nit_empresa;



    public function __construct($cedula = null, $nombre = null, $direccion = null, $telefono = null, $ciudad = null, $nit_empresa = null)
    {
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->cuidad = $ciudad;
        $this->nit_empresa = $nit_empresa;
    }
    public function getCedula()
    {
        return $this->cedula;
    }

    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function getNit_empresa()
    {
        return $this->nit_empresa;
    }

    public function setNit_empresa($nit_empresa)
    {
        $this->nit_empresa = $nit_empresa;
    }
}
