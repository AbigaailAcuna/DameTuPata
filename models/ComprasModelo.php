<?php
include 'Modelo.php';
//modelo de la principal
     class ComprasModelo extends Modelo{
        private $db;
        private $productos;

        public function __construct(){

            //llamamos la conexion
            $this->db=Conectar::conexion();
            $this->productos=array();

        }

     //método para mostrar los productos
    public function ObtenerProductos(){
        $query = "SELECT IdProducto, NombreProducto, DescripcionProducto, CantidadProducto, ImagenProducto, PrecioUnitario, IdEstado from producto WHERE IdEstado = '1'";
        return $this->get($query);
    }
    //método para mostrar un producto
    public function ObtenerProducto($id)
    {
        $query = "SELECT IdProducto, NombreProducto, DescripcionProducto, CantidadProducto, ImagenProducto, PrecioUnitario, IdEstado from producto WHERE IdEstado = '1' and IdProducto = ?";
        return $this->getOne($query, $id);
    }
    //insertar productos en bd (los que se compran)
    public function InsertarCompra($compra)
    {
          extract($compra);
          $sql = "INSERT INTO detallecompra (IdDetalleCompra,IdUsuario, IdProducto, FechaCompra, Cantidad) 
                VALUES (?, ?, ?, ?,?)";
          $stmt = $this->db->prepare($sql);
          $stmt->bind_param('sssss', $IdDetalleCompra, $IdUsuario, $IdProducto, $FechaCompra, $Cantidad);
          return $stmt->execute();
    }

    public function ActualizarCantidad($IdProducto, $CantidadProducto)
    {
          $sql = "UPDATE producto SET  CantidadProducto = ? WHERE IdProducto = ?";
          $stmt = $this->db->prepare($sql);
          $stmt->bind_param('ss', $CantidadProducto, $IdProducto);
          return $stmt->execute();
    }

       
   
}

?>