<?php
require 'models/proveedormodel.php';
require 'models/EmpresaModel.php';


class ProveedorController extends Controller
{
    public function actionIndex()
    {
        $datos = [
            'lista_proveedores' => $this->obtenerProveedor()
        ];

        $this->view('proveedores/listar', $datos);
    }
    public function obtenerProveedor()
    {
        $pModel = new proveedormodel();

        $listado_de_proveedores = $pModel->obtenerProveedor();

        for ($i = 0; $i < count($listado_de_proveedores); $i++) {


            $empresa = $listado_de_proveedores[$i]->getNit_empresa();

            $nombreDeEmpresa = $this->obtenerNombreDeEmpresa ($empresa);

            $listado_de_proveedores[$i]->setNit_empresa($nombreDeEmpresa);
        }

        return $listado_de_proveedores;
    }
    public function obtenerNombreDeEmpresa($id)
    {
        $tpm = new EmpresaModel();

        return $tpm->obtenerNombrePorId($id);
    }

    public function obtenerEmpresa(){
        $pModel = new EmpresaModel();
        return $pModel->obtenerTodas();
    }
    public function actionNuevo()
    {
        if (isset($_POST["cedula"],
        $_POST["nombre"],
        $_POST["direccion"],
        $_POST["ciudad"],
        $_POST["sexo"],
        $_POST["telefono"])) {

            $pModel = new proveedormodel();

            $respuesta =  $pModel->insertar(new cliente(
                $_POST["cedula"],
                $_POST["nombre"],
                $_POST["direccion"],
                $_POST["ciudad"],
                $_POST["sexo"],
                $_POST["telefono"]
            ));

            if ($respuesta) {
                header('location:' . URL . 'proveedores');
            } else {
                echo 'No se registraron Productos Correctamente';
            }
        } else {

            $datos = [
                'ciudades' => $this->obtenerProveedor()

            ];

            $this->view('proveedores/nuevo', $datos);
        }
    }
    public function actionEditar($id)
    {
        $pModel = new ProductoModel();
        if (isset($_POST["cedula"],
        $_POST["nombre"],
        $_POST["direccion"],
        $_POST["ciudad"],
        $_POST["sexo"],
        $_POST["telefono"])) {
            
           
            $respuesta =  $pModel->editar(new proveedor(
                $_POST["cedula"],
                $_POST["nombre"],
                $_POST["direccion"],
                $_POST["ciudad"],
                $_POST["sexo"],
                $_POST["telefono"]
            ));
        if($respuesta){
            header('location:'.URL.'proveedor');
        }else{
            echo 'No se Edito Productos Correctamente';
        }
        }else{

            $datos = [
                'producto' => $pModel->obtenerPorId($id[0]),
                'Empr' => $this->obtenerEmpresa(),
                

            ];
           
            $this->view('proveedores/editar',$datos);

        }
        
    }
    


}
