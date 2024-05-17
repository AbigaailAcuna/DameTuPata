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
      public function bebuchita(){
            require_once "views/cliente/bebuchita.php";
      }
      public function belen(){
            require_once "views/cliente/belen.php";
      }
      public function cocoa(){
            require_once "views/cliente/cocoa.php";
      }
      public function fiby(){
            require_once "views/cliente/fiby.php";
      }
      public function fiji(){
            require_once "views/cliente/fiji.php";
      }
      public function lolita(){
            require_once "views/cliente/lolita.php";
      }
      public function lula(){
            require_once "views/cliente/lula.php";
      }
      public function manolo(){
            require_once "views/cliente/manolo.php";
      }
      public function matilda(){
            require_once "views/cliente/matilda.php";
      }
      public function mumujita(){
            require_once "views/cliente/mumujita.php";
      }
      public function piñita(){
            require_once "views/cliente/piñita.php";
      }
      public function quesito(){
            require_once "views/cliente/quesito.php";
      }
      public function tango(){
            require_once "views/cliente/tango.php";
      }
      public function bebuchitaadopcion(){
            require_once "views/cliente/bebuchitaadopcion.php";
      }
      public function cocoaadopcion(){
            require_once "views/cliente/cocoaadopcion.php";
      }
      public function fibyadopcion(){
            require_once "views/cliente/fibyadopcion.php";
      }
      public function fijiadopcion(){
            require_once "views/cliente/fijiadopcion.php";
      }
}
