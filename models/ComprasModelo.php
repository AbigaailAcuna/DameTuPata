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

       
   
}

?>