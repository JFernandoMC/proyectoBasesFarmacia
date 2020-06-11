<?php

include_once 'entities/dueño.php';


class DueñoModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    
        public function obtenerNombrePorId($id)
        {
    
            $query = $this->db->connect()->prepare("SELECT nombre FROM dueño WHERE id_dueño = :id");
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
                $query = $this->db->connect()->query("SELECT * FROM dueño");
    
                while ($row = $query->fetch()) {
                    $item = new dueño();
                    $item->setId_dueño($row['cedula']);
                    $item->setNombre($row['nombre']);
                    
                    array_push($items, $item);
                }
                return $items;
            } catch (PDOException $e) {
                return [];
            } 
        }
    
}