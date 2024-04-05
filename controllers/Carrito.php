<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
class CarritoController
{

      //leva a la pantalla de carrito y ve validaciones
    public function comprar()
    {
        $validate = -1;
       // $carrito = $_SESSION['carrito'];
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


            //verificamos que exista la sesión
            if (isset($_SESSION['carrito'])) {
                  if ($_GET['id']) {
                        $arreglo = $_SESSION['carrito'];
                        $encontro = false;
                        $numero = 0;
                        for ($i = 0; $i < count($arreglo); $i++) {
                              //compramos el id de url con el id del producto en el carrito
                              if ($arreglo[$i]['Id'] == $_GET['id']) {
                                    $encontro = true;
                                    $numero = $i;
                              }
                        }
                       if ($encontro == true) {
                              //si coinciden los id es que ya lo agregó al carrito así que en lugar de agregarlo, le suma 1
                              //verificamos primero la disponibilidad según bd
                              $dispo = $arreglo[$numero]['CantidadProducto'];
                              if ($arreglo[$numero]['Cantidad'] >= $dispo) {
                                    ///no agrega más
                                    echo "Ya no puede agregar más de este producto";
                              } else {
                                    $arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] + 1;
                                    //actualizamos el arreglo
                              $_SESSION['carrito'] = $arreglo;
                              }
                         }
            
                        else {
                              //si no encontró coincidencia, agrega uno nuevo
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
      
      //borrar productos del carrito
      public function borrar($id)
      {
            if (isset($_SESSION['carrito'])) {
                  if ($_GET['id']) {
                        $arreglo = $_SESSION['carrito'];
                        for ($i = 0; $i < count($arreglo); $i++) {
                              if ($arreglo[$i]['Id'] == $_GET['id']) {
                                    $numero = $i;
                                    //seteando la cantidad a cero
                                    $arreglo[$numero]['Cantidad'] = 0;
                                    $_SESSION['carrito'] = $arreglo;

                                    //lo eliminamos completamente
                                    if ($arreglo[$i]['Cantidad'] == 0) {
                                          unset($arreglo[$i]);
                                          //ordenamos el arreglo
                                          $arreglo = array_values($arreglo);
                                          $_SESSION['carrito'] = $arreglo;
                                    }
                              }
                        }
                  }
            }
            header('Location:?c=Carrito&a=comprar');
      }

        //botón sumar 
        public function sumar($id)
        {
              //vemos qué acción hay que ejecutar
              if (isset($_SESSION['carrito'])) {
                    $arreglo = $_SESSION['carrito'];
                    //hay una acción en la url
                    if (isset($_GET["a"])) {
                          if ($_GET["a"] == "sumar") {
                                for ($i = 0; $i < count($arreglo); $i++) {
                                      if ($arreglo[$i]['Id'] == $_GET['id']) {
                                            $numero = $i;
                                            $arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] + 1;
                                            $dispo = $arreglo[$numero]['CantidadProducto'];
                                            if ($arreglo[$numero]['Cantidad'] > $dispo) {
                                                  ///mensaje
                                            } else {
                                                  $_SESSION['carrito'] = $arreglo;
                                            }
                                      }
                                }
                          }
  
                          header('Location:?c=Carrito&a=comprar');
                    }
              }
        }
    //botón restar
        public function restar($id)
        {
            
              if (isset($_SESSION['carrito'])) {
                    $arreglo = $_SESSION['carrito'];
                    //hay una acción en la url
                    if (isset($_GET["a"])) {
                          if ($_GET["a"] == "restar") {
                                for ($i = 0; $i < count($arreglo); $i++) {
                                      if ($arreglo[$i]['Id'] == $_GET['id']) {
                                            $numero = $i;
                                            if ($arreglo[$numero]['Cantidad'] > 1) {
                                                  $arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] - 1;
                                            } else {
                                                  unset($arreglo[$i]);
                                                  $arreglo = array_values($arreglo);
                                                  $_SESSION['carrito'] = $arreglo;
                                            }
                                      }
                                      $_SESSION['carrito'] = $arreglo;
                                }
                          }
                    }
                    header('Location:?c=Carrito&a=comprar');
              }
        }

      
}