<?php
include_once 'entities/ciudad.php';


class CiudadModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function obtenerNombrePorId($id)

    {

        $query = $this->db->connect()->prepare("SELECT nombre FROM ciudad WHERE id_ciudad = :id");
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
            $query = $this->db->connect()->query("SELECT * FROM ciudad");

            while ($row = $query->fetch()) {
                $item = new ciudad();
                $item->setId_ciudad($row['id_ciudad']);
                $item->setNombre($row['nombre']);
                $item->setPais($row['pais']);
                
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
}
