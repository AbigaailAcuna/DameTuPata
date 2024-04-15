<?php
session_start();
//interactuamos entre modelo y vista
class VentaController
{
      public function FinalizarCompra()
      {
          $total = 0;
      
          require_once "./models/ComprasModelo.php";
       
          $productos = new ComprasModelo();
      
        

          // Si hay una sesión iniciada y hay productos en el carrito
          if (isset($_SESSION['login_data']) && isset($_SESSION['carrito'])) {
              foreach ($_SESSION['carrito'] as $producto) {
                  // Calcula el total
                  $total += $producto['CantidadProducto'] * $producto['PrecioUnitario'];
      
                  // Prepara los datos de la compra
                  $compra = [
                      'IdUsuario' => $_SESSION['login_data']['IdUsuario'],
                      'IdProducto' => $producto['Id'],
                      'FechaCompra' => date("Y-m-d"),
                      'Cantidad' => $producto['Cantidad']
                  ];
      
                  // Guarda la compra en la base de datos
                  $productos->InsertarCompra($compra);
      
                  // Calcula la nueva cantidad disponible del producto
                  $nuevacantidad = $producto['CantidadProducto'] - $producto['Cantidad'];
      
                  // Actualiza la cantidad disponible del producto en la base de datos
                  $productos->ActualizarCantidad($producto['Id'], $nuevacantidad);
              }
      
              header('Location:?c=Compras&a=index');

              unset($_SESSION['carrito']);
              exit;
          } else {
              var_dump("Error: no hay sesión iniciada o no hay productos en el carrito");
          }

          require_once "views/cliente/Carrito.php";
      
      }
      
}
