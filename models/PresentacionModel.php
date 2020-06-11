<?php
include_once 'entities/presentacion.php';

class PresentacionModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    
        public function obtenerNombrePorId($id)
        {
    
            $query = $this->db->connect()->prepare("SELECT nombre FROM presentacion WHERE cod_presentacion = :id");
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
            $query = $this->db->connect()->query("SELECT * FROM presentacion");

            while ($row = $query->fetch()) {
                $item = new presentacion();
                $item->setCod_presentacion($row['cod_presentacion']);
                $item->setNombre($row['nombre']);
               
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        } 
    }
    
}
