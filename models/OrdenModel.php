<?php
include_once 'entities/orden.php';

class OrdenModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function obtenerOrden()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM orden");

            while ($row = $query->fetch()) {
                $item = new orden();
                $item->setCod_orden($row['cod_orden']);
                $item->setCod_cliente($row['cod_cliente']);
                $item->setCod_producto($row['cod_producto']);
                $item->setCantidad($row['cantidad']);
                $item->setCod_metodoPago($row['cod_metodoPago']);
                $item->setFecha($row['fecha']);
                $item->setUsuario($row['usuario']);
                $item->setMonto($row['monto']);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
    public function insertar($orden)
    {
        $query = $this->db->connect()->prepare("INSERT INTO orden(cod_orden,cod_cliente,cod_producto,cantidad,cod_metodoPago,fecha,usuario,monto)
         VALUES (:cod_orden,:cod_cliente,:cod_producto,:cantidad,:cod_metodepago,:fecha,:usuario,:monto)");
        try {
            $query->execute([
                'cod_orden' => $orden->getCod_orden(),
                'cod_cliente' => $orden->getCod_cliente(),
                'cod_producto' => $orden->getCod_producto(),
                'cantidad' => $orden->getCantidad(),
                'cod_metodepago' => $orden->getCod_metodoPago(),
                'fecha' => $orden->getFecha(),
                'usuario' => $orden->getUsuario(),
                'monto' => $orden->getMonto()
                

            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    
}