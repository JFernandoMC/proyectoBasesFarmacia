<?php
include_once 'entities/tipoproducto.php';

class tipoproductomodel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function obtenerNombrePorId($id)
    {

        $query = $this->db->connect()->prepare("SELECT nombre FROM tipoproducto WHERE cod_tipoProd = :id");
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
            $query = $this->db->connect()->query("SELECT * FROM tipoproducto");

            while ($row = $query->fetch()) {
                $item = new tipoproducto();
                $item->setCod_tipoProd($row['cod_tipoProd']);
                $item->setNombre($row['nombre']);
                
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        } 
    }
}
