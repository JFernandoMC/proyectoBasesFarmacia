<?php
include_once 'entities/Producto.php';

class ProductoModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function obtenerProductos()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM producto");

            while ($row = $query->fetch()) {
                $item = new Producto();
                $item->setCod_producto($row['cod_producto']);
                $item->setNombre($row['nombre']);
                $item->setPrecioVenta($row['precioVenta']);
                $item->setPrecioCompra($row['precioCompra']);
                $item->setFechaVenci($row['fechaVenci']);
                $item->setCod_tipoProd($row['cod_tipoPro']);
                $item->setCod_Prove($row['cod_prove']);
                $item->setCod_pres($row['cod_pres']);
                $item->setCantidad($row['cantidad']);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
    public function insertar($producto){
        $query = $this->db->connect()->prepare("INSERT INTO producto(cod_producto,nombre,precioVenta,precioCompra,fechaVenci,cod_tipoPro,
        cod_prove,cod_pres,cantidad) 
        VALUES (:codigo,:nombre,:prevent,:precomp,:fecha,:tipo,:prove,:pres,:cantidad)");
        try{
            $query->execute([
                'codigo' => $producto->getCod_producto(),
                'nombre' => $producto->getNombre(),
                'prevent'=> $producto->getPrecioVenta(),
                'precomp' => $producto->getPrecioCompra(),
                'fecha' => $producto->getFechaVenci(),
                'tipo'=> $producto->getCod_tipoProd(),
                'prove' => $producto->getCod_Prove(),
                'pres' => $producto->getCod_pres(),
                'cantidad'=> $producto->getCantidad()
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
}
   public function eliminar($id){
         $query = $this->db->connect()->prepare("DELETE FROM producto WHERE cod_producto = :id");
         try{
             $query->execute([
                 'id' => $id
             ]);
             return true;
        }catch(PDOException $e){
             return false;
         }
     }
     public function editar($producto){
        $query = $this->db->connect()->prepare("UPDATE producto 
        SET nombre = :nombre,
            precioVenta = :venta,
            precioCompra = :compra,
            fechaVenci = :venci,
            cod_tipoPro = :tipo,
            cod_prove = :prove,
            cod_pres = :pres,
            cantidad = :cant
            WHERE cod_producto = :cod");
        try{
            $query->execute([
                'cod' => $producto->getCod_producto(),
                'nombre' => $producto->getNombre(),
                'venta'=> $producto->getPrecioVenta(),
                'compra' => $producto->getPrecioCompra(),
                'venci' => $producto->getFechaVenci(),
                'tipo'=> $producto->getCod_tipoProd(),
                'prove' => $producto->getCod_Prove(),
                'pres' => $producto->getCod_pres(),
                'cant'=> $producto->getCantidad()
           ]);
             return true;
         }catch(PDOException $e){
             return false;
         }
     }
     public function obtenerPorId($id){
             $item = new Producto();
             $query = $this->db->connect()->prepare("SELECT * FROM producto WHERE cod_producto = :id");
             try{
                 $query->execute(['id' => $id]);
    
                 while($row = $query->fetch()){
                    $item->setCod_producto($row['cod_producto']);
                    $item->setNombre($row['nombre']);
                    $item->setPrecioVenta($row['precioVenta']);
                    $item->setPrecioCompra($row['precioCompra']);
                    $item->setFechaVenci($row['fechaVenci']);
                    $item->setCod_tipoProd($row['cod_tipoPro']);
                    $item->setCod_Prove($row['cod_prove']);
                    $item->setCod_pres($row['cod_pres']);
                    $item->setCantidad($row['cantidad']);
                    
                 }
                 return $item;
             }catch(PDOException $e){
                 return null;
             }
     }
     public function obtenerTodas()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM producto");

            while ($row = $query->fetch()) {
                $item = new Producto();
                $item->setCod_producto($row['cod_producto']);
                $item->setNombre($row['nombre']);
                
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        } 
    }
}

