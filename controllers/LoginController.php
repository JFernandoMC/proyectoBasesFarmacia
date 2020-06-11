<?php
require 'models/usuariomodel.php';

class LoginController extends Controller
{

    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new usuariomodel();
    }

    public function actionIndex()
    {
        $data = ['titulo' => 'Login'];

        $this->view('login', $data);
    }

    public function actionValidar()
    {
        if (isset($_POST['user'], $_POST['pass'])) {
            session_start();

            $username = $_POST['user'];
            $pass = $_POST['pass'];

            if ($this->usuarioModel->validarInicioSesion($username, $pass)->getNombre() != null) {
                $_SESSION['user'] = $username;
                $_SESSION['user_name'] = $this->usuarioModel->validarInicioSesion($username, $pass)->getNombre();
                header('location: ' . URL . 'productos');
            } else {
                echo "error";
            }
        } else {
            header('location: ' . URL . 'login');
        }
    }

    public function actionLogout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: ' . URL . 'login');
    }
}
