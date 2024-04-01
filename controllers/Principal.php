<?php
//interactuamos entre modelo y vista
class PrincipalController
{
      //pantallla principal
      public function index()
      {
            require_once "views/cliente/Principal.php";
      }
      //pantallla de compras
      public function compras()
      {
            require_once "views/cliente/Compras.php";
      }
      //pantallla de adopciones
      public function adopciones()
      {
            require_once "views/cliente/Adopciones.php";
      }
      //pantallla de compras
      public function donaciones()
      {
            require_once "views/cliente/Donaciones.php";
      }
}
