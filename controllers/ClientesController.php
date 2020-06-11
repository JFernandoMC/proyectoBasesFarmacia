<?php
require 'models/ClienteModel.php';
require 'models/CiudadModel.php';


class ClientesController extends Controller
{

    public function actionIndex()
    {
        $datos = [
            'lista_clientes' => $this->obtenerClientes()
        ];

        $this->view('clientes/listar', $datos);
    }

    public function obtenerClientes()
    {
        $pModel = new ClienteModel();

        $listado_de_clientes = $pModel->obtenerClientes();

        for ($i = 0; $i < count($listado_de_clientes); $i++) {


            $ciudad = $listado_de_clientes[$i]->getCiudad();

            $nombreDeCiudad = $this->obtenerNombreDeCiudad($ciudad);

            $listado_de_clientes[$i]->setCiudad($nombreDeCiudad);
        }

        return $listado_de_clientes;
    }


    public function obtenerNombreDeCiudad($id)
    {
        $tpm = new CiudadModel();

        return $tpm->obtenerNombrePorId($id);
    }
    public function actionEliminar($id)
    {
        $pmodel = new ClienteModel();
        $pmodel->eliminar($id[0]);
        header('location:' . URL . 'clientes');
    }
    public function actionNuevo()
    {
        if (isset($_POST["cedula"],
        $_POST["nombre"],
        $_POST["direccion"],
        $_POST["ciudad"],
        $_POST["sexo"],
        $_POST["telefono"])) {
            $pModel = new ClienteModel();

            $respuesta =  $pModel->insertar(new cliente(
                $_POST["cedula"],
                $_POST["nombre"],
                $_POST["direccion"],
                $_POST["ciudad"],
                $_POST["sexo"],
                $_POST["telefono"]
            ));

            if ($respuesta) {
                header('location:' . URL . 'clientes');
            } else {
                echo 'No se registraron Productos Correctamente';
            }
        } else {

            $datos = [
                'ciudades' => $this->obtenerCiudades()

            ];

            $this->view('clientes/nuevo', $datos);
        }
    }
    public function obtenerCiudades()
    {
        $cmodel = new CiudadModel();
        return $cmodel->obtenerTodas();
    }
    public function actionEditar($id)
    {
        $pModel = new ClienteModel();

        if (isset($_POST["cedula"],
        $_POST["nombre"],
        $_POST["direccion"],
        $_POST["ciudad"],
        $_POST["sexo"],
        $_POST["telefono"])) {
    
            $respuesta =  $pModel->editar(new cliente(
                $_POST["cedula"],
                $_POST["nombre"],
                $_POST["direccion"],
                $_POST["ciudad"],
                $_POST["sexo"],
                $_POST["telefono"]
            ));

            if ($respuesta) {
                header('location:' . URL . 'clientes');
            } else {
                echo 'No se Edito clientes Correctamente';
            }
        }
         else {

            $datos = [
                'cliente' => $pModel->obtenerPorId($id[0]),
                'ciudades' => $this->obtenerCiudades()

            ];

            $this->view('clientes/editar', $datos);
        }
    }
}
