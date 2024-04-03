<?php
//interactuamos entre modelo y vista
class ComprasController
{



      public function index()
      {
            //traemos el modelo
            require_once "./models/ComprasModelo.php";
           
            //instanciamos el modelo
            $productos = new ComprasModelo();
        
            
            //traemos el método del modelo
            $info["productos"] = $productos->ObtenerProductos();

              
            require_once "views/cliente/Compras.php";
           
          
      }

     
}