<?php
require 'models/ProductoModel.php';
require 'models/tipoproductomodel.php';
require 'models/proveedormodel.php';
require 'models/PresentacionModel.php';

class ProductosController extends Controller
{

    public function actionIndex()
    {
        $datos = [
            'lista_productos' => $this->obtenerProductos()
        ];

        $this->view('productos/listar', $datos);
    }
    public function actionEditar($id)
    {
        $pModel = new ProductoModel();
        if(isset(
        $_POST["codPro"],
        $_POST["nombre"],
        $_POST["precioVen"],
        $_POST["precioCom"],
        $_POST["fecha"],
        $_POST["tipoPro"],
        $_POST["proveedor"],
        $_POST["presentacion"],
        $_POST["cantidad"]
        )){
            
           
          $respuesta =  $pModel->editar(new Producto( 
            $_POST["codPro"],
            $_POST["nombre"],
            $_POST["precioVen"],
            $_POST["precioCom"],
            $_POST["fecha"],
            $_POST["tipoPro"],
            $_POST["proveedor"],
            $_POST["presentacion"],
            $_POST["cantidad"]));
        if($respuesta){
            header('location:'.URL.'productos');
        }else{
            echo 'No se Edito Productos Correctamente';
        }
        }else{

            $datos = [
                'producto' => $pModel->obtenerPorId($id[0]),
                'tiposDeProductos' => $this->obtenerTiposProductos(),
                'tiposDePresentacion' => $this->obtenerPresentacion(),
                'tiposDeProveedores' => $this->obtenerProveedores()

            ];
           
            $this->view('productos/editar',$datos);

        }
        
    }
    public function actionEliminar($id){
     $pmodel = new ProductoModel();
     $pmodel->eliminar($id[0]);
     header('location:'.URL.'productos');

    }
    public function actionNuevo()
    {
        if(isset(
        $_POST["codPro"],
        $_POST["nombre"],
        $_POST["precioVen"],
        $_POST["precioCom"],
        $_POST["fecha"],
        $_POST["tipoPro"],
        $_POST["proveedor"],
        $_POST["presentacion"],
        $_POST["cantidad"]
        )){
            $pModel = new ProductoModel();
           
          $respuesta =  $pModel->insertar(new Producto( 
            $_POST["codPro"],
            $_POST["nombre"],
            $_POST["precioVen"],
            $_POST["precioCom"],
            $_POST["fecha"],
            $_POST["tipoPro"],
            $_POST["proveedor"],
            $_POST["presentacion"],
            $_POST["cantidad"]));
        if($respuesta){
            header('location:'.URL.'productos');
        }else{
            echo 'No se registraron Productos Correctamente';
        }
        }else{

            $datos = [
                'tiposDeProductos' => $this->obtenerTiposProductos(),
            
                'tiposDePresentacion' => $this->obtenerPresentacion(),
            
                'tiposDeProveedores' => $this->obtenerProveedores()
            ];
           
            $this->view('productos/nuevo',$datos);

        }
        
    }
    
    public function obtenerTiposProductos(){
        $pModel = new tipoproductomodel();
        return $pModel->obtenerTodas();
    }
    public function obtenerPresentacion(){
        $pModel = new PresentacionModel();
        return $pModel ->obtenerTodas();
    }
    public function obtenerProveedores(){
        $pModel = new proveedormodel();
        return $pModel ->obtenerTodas();
    }


    public function obtenerProductos()
    {
        $pModel = new ProductoModel();

        $listado_de_productos = $pModel->obtenerProductos();

        for ($i = 0; $i < count($listado_de_productos); $i++) {

            $codigoTipoProducto = $listado_de_productos[$i]->getCod_tipoProd();

            $nombreTipoProducto = $this->obtenerNombreTipoProducto($codigoTipoProducto);

            $listado_de_productos[$i]->setCod_tipoProd($nombreTipoProducto);

            $cedula_proveedor =  $listado_de_productos[$i]->getCod_Prove();

            $nombreDelProveedor = $this->obtenerNombreDeProveedor($cedula_proveedor);

            $listado_de_productos[$i]->setCod_Prove( $nombreDelProveedor);

            $codigo_presentacion = $listado_de_productos[$i]->getCod_pres();

            $nombreDePresentacion = $this->obtenerNombreDePresentacion($codigo_presentacion);

            $listado_de_productos[$i]->setCod_pres( $nombreDePresentacion);

        }

        return $listado_de_productos;
    }


    public function obtenerNombreTipoProducto($id)
    {
        $tpm = new tipoproductomodel();

        return $tpm->obtenerNombrePorId($id);
    }



    public function obtenerNombreDeProveedor($id)
    {
        $pmodel = new proveedormodel(); 

        return $pmodel->obtenerNombrePorId($id);
    }

    public function obtenerNombreDePresentacion($id)
    {
        $pmodel = new PresentacionModel(); 

        return $pmodel->obtenerNombrePorId($id);
    }


}
