<?php
include_once 'entities/empresa.php';

class EmpresaModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    
        public function obtenerNombrePorId($id)
        {
    
            $query = $this->db->connect()->prepare("SELECT nombre FROM empresa WHERE nit = :id");
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
            $query = $this->db->connect()->query("SELECT * FROM empresa");

            while ($row = $query->fetch()) {
                $item = new empresa();
                $item->setNit($row['codEmpresa']);
                $item->setNombre($row['nombre']);
               
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        } 
    }
    
}