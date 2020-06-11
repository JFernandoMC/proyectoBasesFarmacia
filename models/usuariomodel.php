<?php
include_once 'entities/usuario.php';

class usuariomodel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertar($usuario)
    {
        $query = $this->db->connect()->prepare("INSERT INTO usuario(cedula,usuario,nombre,direccion,telefono,sexo,rol,contrasena,cod_dueno,cod_ciudad)
        VALUES (:cedula,:usuario,:nombre,:direccion,:telefono,:sexo,:rol,:contrasena,:cod_dueno,:cod_ciudad)");
        try {
            $query->execute([
                'cedula' => $usuario->getCedula(),
                'usuario' => $usuario->getUsuario(),
                'nombre' => $usuario->getNombre(),
                'direccion' => $usuario->getDireccion(),
                'telefono' => $usuario->getTelefono(),
                'sexo' => $usuario->getSexo(),
                'rol' => $usuario->getRol(),
                'contrasena' => $usuario->getContrasena(),
                'cod_dueno' => $usuario->getCod_dueno(),
                'cod_ciudad' => $usuario->getCod_ciudad()


            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function obtenerPorId($id)
    {
        $item = new usuario();
        $query = $this->db->connect()->prepare("SELECT * FROM usuario WHERE cedula = :id");
        try {
            $query->execute(['id' => $id]);

            while ($row = $query->fetch()) {
                $item->setCedula($row['cedula']);
                $item->setNombre($row['usuario']);
                $item->setDireccion($row['nombre']);
                $item->setDireccion($row['direccion']);
                $item->setTelefono($row['telefono']);
                $item->setSexo($row['sexo']);
                $item->setRol($row['rol']);
                $item->setContrasena($row['contrasena']);
                $item->setCod_dueno($row['cod_dueno']);
                $item->setCod_ciudad($row['cod_ciudad']);
            }
            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }
    public function editar($item)
    {
        $query = $this->db->connect()->prepare("UPDATE usuario SET cedula = :cedula, usuario = :usuario, nombre = :nombre,
         direccion = :direccion, telefono = :telefono, sexo = :sexo,  rol = :rol,contrasena = :contrasena, cod_ciudad = :cod_ciudad 
         WHERE cod_dueno = :cod_dueno");
        try {
            $query->execute([
                'cod_dueno' => $item['cod_dueno'],
                'cedula' => $item['cedula'],
                'usuario' => $item['usuario'],
                'nombre' => $item['nombre'],
                'direccion' => $item['direccion'],
                'telefono' => $item['telefono'],
                'sexo' => $item['sexo'],
                'rol' => $item['rol'],
                'contrasena' => $item['contrasena'],
                'cod_ciudad' => $item['cod_ciudad'],
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function eliminar($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM usuario WHERE cedula = :id");
        try {
            $query->execute([
                'id' => $id
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function obtenerTodas()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM usuario");

            while ($row = $query->fetch()) {
                $item = new usuario();
                $item->setCedula($row['cedula']);
                $item->setNombre($row['nombre']);

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
    public function obtenerUsuarios()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM usuario");

            while ($row = $query->fetch()) {
                $item = new usuario();
                $item->setCedula($row['cedula']);
                $item->setNombre($row['usuario']);
                $item->setDireccion($row['nombre']);
                $item->setDireccion($row['direccion']);
                $item->setTelefono($row['telefono']);
                $item->setSexo($row['sexo']);
                $item->setRol($row['rol']);
                $item->setContrasena($row['contrasena']);
                $item->setCod_dueno($row['cod_dueno']);
                $item->setCod_ciudad($row['cod_ciudad']);
                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function validarInicioSesion($user, $pass)
    {
        $item = new usuario();
        $query = $this->db->connect()->prepare("SELECT * FROM usuario WHERE usuario = :usu AND contrasena = :pass");
        try {
            $query->execute([
                'usu' => $user,
                'pass' => $pass
            ]);

            while ($row = $query->fetch()) {
                $item->setCedula($row['cedula']);
                $item->setNombre($row['usuario']);
                $item->setDireccion($row['nombre']);
                $item->setDireccion($row['direccion']);
                $item->setTelefono($row['telefono']);
                $item->setSexo($row['sexo']);
                $item->setRol($row['rol']);
                $item->setContrasena($row['contrasena']);
                $item->setCod_dueno($row['cod_dueno']);
                $item->setCod_ciudad($row['cod_ciudad']);
            }
            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }
}
