<?php
require 'models/ClienteModel.php';
require 'models/ProductoModel.php';
require 'models/MetodoPagoModel.php';
require 'models/OrdenModel.php';



class OrdenesController extends Controller
{

    public function actionIndex()
    {
        $datos = [
            'listado_orden' => $this->obtenerOrdenes()
        ]; 

        $this->view('orden/listar',$datos);
    }
    public function actionNuevo()
    {
       
        $this->view('orden/nuevo');
    }


    public function obtenerOrdenes()
    {
        $pModel = new OrdenModel();

        $listado_de_ordenes = $pModel->obtenerOrden();

        
        return $listado_de_ordenes;
    }
    public function obtenerNombreCliente($id){

        $pModel = new ClienteModel();

        return $pModel->obtenerPorId($id);
    }
    public function obtenerNombreProducto($id){

        $pModel = new ProductoModel();

        return $pModel ->obtenerPorId($id);
    }
    public function ObtenerMetodoPago($id){

        $pModel = new MetodoPagoModel();

        return $pModel ->obtenerNombrePorId($id);
    }

    public function obtenerProductos(){
        $pModel = new ProductoModel();
        return $pModel->obtenerTodas();
    }
    public function obtenerCliente(){
        $pModel = new ClienteModel();
        return $pModel ->obtenerTodas();
    }
    public function obtenerTipoPago(){
        $pModel = new MetodoPagoModel();
        return $pModel ->obtenerTodas();
    }
}
