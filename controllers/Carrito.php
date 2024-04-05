<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
class CarritoController
{

      //leva a la pantalla de carrito y ve validaciones
    public function comprar()
    {
        $validate = -1;
        $carrito = $_SESSION['carrito'];
        $errors = [];
       
        if (isset($_POST['pagar'])) {
            extract($_POST);
            validateCreditCard($numTarjeta, $validate, $errors);
            validateText($nombre, $validate, $errors, 'nombre');
            validateText($apellido, $validate, $errors, 'apellido');
            validateCVV($cvv, $validate, $errors);
            validateDate($fechaExp, $validate, $errors);
        }

        require_once "views/cliente/Carrito.php"; 
      
    }
    

    //agregar productos al carrito
      public function agregar($id)
      {
            require_once "models/ComprasModelo.php";
            $productos = new ComprasModelo();
            $info["id"] = $id;
            $info["productos"] = $productos->ObtenerProducto($id);


            if (isset($_SESSION['carrito'])) {
                  if ($_GET['id']) {
                        $arreglo = $_SESSION['carrito'];
                        $encontro = false;
                        $numero = 0;
                        for ($i = 0; $i < count($arreglo); $i++) {
                              if ($arreglo[$i]['Id'] == $_GET['id']) {
                                    $encontro = true;
                                    $numero = $i;
                              }
                        }
                       if ($encontro == true) {
                              
                              $dispo = $arreglo[$numero]['CantidadProducto'];
                              if ($arreglo[$numero]['Cantidad'] >= $dispo) {
                                    ///no agrega más
                                    echo "Ya no puede agregar más de este producto";
                              } else {
                                    $arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] + 1;
                              $_SESSION['carrito'] = $arreglo;
                              }
                         }
            
                        else {
                              $nombre = $info["productos"]["NombreProducto"];
                              $precio = $info["productos"]["PrecioUnitario"];
                              $imagen = $info["productos"]["ImagenProducto"];
                              $disponibilidad = $info["productos"]["CantidadProducto"];

                              $arreglonuevo = array(
                                    'Id' => $_GET['id'],
                                    'NombreProducto' => $nombre,
                                    'PrecioUnitario' => $precio,
                                    'ImagenProducto' => $imagen,
                                    'CantidadProducto' => $disponibilidad,
                                    'Cantidad' => 1
                              );
                              array_push($arreglo, $arreglonuevo);
                              $_SESSION['carrito'] = $arreglo;
                        }
                        header('Location:?c=Compras&a=index');
                  }
            } else if (isset($_GET['id'])) {
                $nombre = $info["productos"]["NombreProducto"];
                $precio = $info["productos"]["PrecioUnitario"];
                $imagen = $info["productos"]["ImagenProducto"];
                $disponibilidad = $info["productos"]["CantidadProducto"];


                  $arreglo[] = array(
                    'Id' => $_GET['id'],
                    'NombreProducto' => $nombre,
                    'PrecioUnitario' => $precio,
                    'ImagenProducto' => $imagen,
                    'CantidadProducto' => $disponibilidad,
                    'Cantidad' => 1
                  );
                  $_SESSION['carrito'] = $arreglo;
                  header('Location:?c=Compras&a=index');
            }
      }

      
}