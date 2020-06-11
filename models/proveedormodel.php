<?php
include_once 'entities/proveedor.php';

class proveedormodel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function obtenerNombrePorId($id)
    {

        $query = $this->db->connect()->prepare("SELECT nombre FROM proveedor WHERE cedula = :id");
        try {
            $query->execute(['id' => $id]);

            while ($row = $query->fetch()) {
                return $row['nombre'];
            }
        } catch (PDOException $e) {
            return null;
        }
    }
    public function obtenerTodas()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM proveedor");

            while ($row = $query->fetch()) {
                $item = new proveedor();
                $item->setCedula($row['cedula']);
                $item->setNombre($row['nombre']);
                $item->setDireccion($row['direccion']);
                $item->setTelefono($row['telefono']);
                $item->setCiudad($row['ciudad']);
                $item->setNit_empresa($row['nit_empresa']);
                
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function obtenerProveedor()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM proveedor");

            while ($row = $query->fetch()) {
                $item = new proveedor();
                $item->setCedula($row['cedula']);
                $item->setNombre($row['nombre']);
                $item->setDireccion($row['direccion']);
                $item->setTelefono($row['telefono']);
                $item->setDireccion($row['direccion']);
                $item->setNit_empresa($row['nit_empresa']);
                
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
    public function insertar($proveedor)
    {
        $query = $this->db->connect()->prepare("INSERT INTO proveedor(cedula,nombre,direccion,telefono,ciudad,nit_empresa)
         VALUES (:cedula,:nombre,:direccio,:telefono,:ciudad,:nit_empresa)");
        try {
            $query->execute([
                'cedula' => $proveedor->getCedula(),
                'nombre' => $proveedor->getNombre(),
                'direccion' => $proveedor->getDireccion(),
                'telefono' => $proveedor->getTelefono(),
                'ciudad' => $proveedor->getCiudad(),
                'nit_empresa' => $proveedor->getNit_empresa()

            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function eliminar($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM proveedor WHERE cedula = :id");
        try {
            $query->execute([
                'id' => $id
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function editar($proveedor)
    {

        $query = $this->db->connect()->prepare("UPDATE proveedor
        SET cedula=:cedula,nombre=:nombre,direccion=:direccion,telefono=:telefono,ciudad=:ciudad,nit_empresa=:nit_empresa 
        WHERE cedula=:cedula");
        try {
            $query->execute([
                'cedula' => $proveedor->getCedula(),
                'nombre' => $proveedor->getNombre(),
                'direccion' =>$proveedor->getDireccion(),
                'telefono' => $proveedor->getTelefono(),
                'ciudad' => $proveedor->getCiudad(),
                'nit_empresa' => $proveedor->getNit_empresa()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

}
