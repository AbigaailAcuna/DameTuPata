<?php
session_start();
//interactuamos entre modelo y vista
// Controlador Usuario
class UsuarioController
{

      //visualizamos la pantalla de registro
      public function registro()
      {
            require_once "views/cliente/Registro.php";
      }

      //validamos e insertamos en bd
      public function registrar()
      {
            require_once "./models/UsuarioModelo.php";

            // Definir el array de errores
            $errors = array();

            // Verificar si se envió el formulario
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
                  // Obtener los datos del formulario
                  $NombreUsuario = $_POST['NombreUsuario'];
                  $IdRol = "1";
                  $ApellidoUsuario = $_POST['ApellidoUsuario'];
                  $TelefonoUsuario = $_POST['TelefonoUsuario'];
                  $DuiUsuario = $_POST['DuiUsuario'];
                  $CorreoUsuario = $_POST['CorreoUsuario'];
                  $DireccionUsuario = $_POST['DireccionUsuario'];
                  $ContrasenaUsuario = $_POST['ContrasenaUsuario'];

                  // Validar los datos del formulario
                  if (empty($NombreUsuario)) {
                        $errors['NombreUsuario'] = "Ingrese su Nombre";
                  }
                  if (empty($ApellidoUsuario)) {
                        $errors['ApellidoUsuario'] = "Ingrese su Apellido";
                  }
                  if (empty($DireccionUsuario)) {
                        $errors['DireccionUsuario'] = "Ingrese su Dirección";
                  }
                  if (empty($TelefonoUsuario)) {
                        $errors['TelefonoUsuario'] = "Ingrese su Teléfono";
                  }
                  if (empty($DuiUsuario)) {
                        $errors['DuiUsuario'] = "Ingrese su DUI";
                  }
                  if (empty($CorreoUsuario)) {
                        $errors['CorreoUsuario'] = "Ingrese su Correo";
                  }
                  if (empty($ContrasenaUsuario)) {
                        $errors['ContrasenaUsuario'] = "Ingrese su Contraseña";
                  }
                  if (!empty($errors)) {
                        $_SESSION['errors'] = $errors;
                        $_SESSION['NombreUsuario'] = $NombreUsuario;
                        $_SESSION['ApellidoUsuario'] = $ApellidoUsuario;
                        $_SESSION['DireccionUsuario'] = $DireccionUsuario;
                        $_SESSION['TelefonoUsuario'] = $TelefonoUsuario;
                        $_SESSION['DuiUsuario'] = $DuiUsuario;
                        $_SESSION['CorreoUsuario'] = $CorreoUsuario;
                        $_SESSION['ContrasenaUsuario'] = $ContrasenaUsuario;

                        header('Location:?c=Usuario&a=registro');
                  }
                  // Verificar si hay errores
                  if (empty($errors)) {
                        // Instanciar el modelo de Usuario
                        $userModel = new UsuarioModelo();

                        // Verificar si el usuario ya existe
                        if ($userModel->existeUsuario($CorreoUsuario)) {
                              $_SESSION['error'] = 'El correo electrónico ya está en uso';
                        } else {
                              // Agregar el usuario
                              if ($userModel->AgregarUsuario($NombreUsuario, $IdRol, $ApellidoUsuario, $TelefonoUsuario, $DuiUsuario, $CorreoUsuario, $DireccionUsuario, $ContrasenaUsuario)) {
                                    // Limpiar los valores de sesión
                                    unset($_SESSION['NombreUsuario']);
                                    unset($_SESSION['ApellidoUsuario']);
                                    unset($_SESSION['DireccionUsuario']);
                                    unset($_SESSION['TelefonoUsuario']);
                                    unset($_SESSION['DuiUsuario']);
                                    unset($_SESSION['CorreoUsuario']);
                                    unset($_SESSION['ContrasenaUsuario']);

                                    unset($_SESSION['errors']);
                                    unset($_SESSION['error']);

                                    // Redirigir 
                                    header('Location:?c=Compras&a=index');



                                    exit;
                              } else {
                                    $_SESSION['error'] = 'Error al registrar';
                              }
                        }
                  }
            }

            // Cargar la vista
            require_once "views/cliente/Registro.php";
      }

      public function iniciosesion(){

            //cargamos la vista de inicio de sesión
            require_once "views/cliente/InicioSesion.php";
      }

      public function validarusuario(){

            require_once "./models/UsuarioModelo.php";

             // Definir el array de errores
             $errors = array();

             // Verificar si se envió el formulario
             if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {

                   // Obtener los datos del formulario
                
                   
                   $CorreoUsuario = $_POST['CorreoUsuario'];
                   $ContrasenaUsuario = $_POST['ContrasenaUsuario'];

                  
                   // Validar los datos del formulario
                   if (empty($CorreoUsuario)) {
                         $errors['CorreoUsuario'] = "Ingrese su Correo";
                   }
                   if (empty($ContrasenaUsuario)) {
                         $errors['ContrasenaUsuario'] = "Ingrese su Contraseña";
                   }
                   if (!empty($errors)) {
                         $_SESSION['errors'] = $errors;
                        
 
                         header('Location:?c=Usuario&a=iniciosesion');
                   }
                   // Verificar si hay errores
                   if (empty($errors)) {
                         // Instanciar el modelo de Usuario
                         $userModel = new UsuarioModelo();
 
                         
                               // Agregar el usuario
                               if ($login_data =  $userModel->validarUsuario($CorreoUsuario, $ContrasenaUsuario)) {
                                     // Limpiar los valores de sesión
                                     unset($_SESSION['errors']);
                                     unset($_SESSION['error']);
                                     $login_data = $login_data[0];
                                     $_SESSION['login_data'] = $login_data;
                                     // Redirigir al formulario de registro
                                     header('Location:?c=Compras&a=index');
 
 
 
                                     exit;
                               } else {
                                    $_SESSION['error'] = 'Datos erroneos o ha sido bloqueado por los administradores';

                                    
                                     unset($_SESSION['errors']);
                                     
                                     //header('Location:?c=Usuario&a=iniciosesion');
                               }
                         
                   }
             }
             require_once "views/cliente/InicioSesion.php";
 

      }
      public function logout(){

            session_unset();
            session_destroy();
            header('Location:?c=Compras&a=index');   
      }
}
