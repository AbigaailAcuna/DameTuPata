<?php
session_start();
//interactuamos entre modelo y vista
// Controlador Usuario
class UsuarioController
{

      public function registrar()
      {
            require_once "./models/UsuarioModelo.php";

            // Definir el array de errores
            $errores = array();

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
                        $errores['NombreUsuario'] = "Ingrese su Nombre";
                  }
                  if (empty($ApellidoUsuario)) {
                        $errores['ApellidoUsuario'] = "Ingrese su Apellido";
                  }
                  if (empty($DireccionUsuario)) {
                        $errores['DireccionUsuario'] = "Ingrese su Dirección";
                  }
                  if (empty($TelefonoUsuario)) {
                        $errores['TelefonoUsuario'] = "Ingrese su Teléfono";
                  }
                  if (empty($DuiUsuario)) {
                        $errores['DuiUsuario'] = "Ingrese su DUI";
                  }
                  if (empty($CorreoUsuario)) {
                        $errores['CorreoUsuario'] = "Ingrese su Correo";
                  }
                  if (empty($ContrasenaUsuario)) {
                        $errores['ContrasenaUsuario'] = "Ingrese su Contraseña";
                  }

                  // Verificar si hay errores
                  if (empty($errores)) {
                        // Instanciar el modelo de Usuario
                        $userModel = new UsuarioModelo();

                        // Verificar si el usuario ya existe
                        if ($userModel->existeUsuario($CorreoUsuario)) {
                              $errores['general'] = 'El correo electrónico ya está en uso';
                        } else {
                              // Agregar el usuario
                              if ($userModel->AgregarUsuario($NombreUsuario, $IdRol, $ApellidoUsuario, $TelefonoUsuario, $DuiUsuario, $CorreoUsuario, $DireccionUsuario, $ContrasenaUsuario)) {
                                    // Redirigir al formulario de registro
                                    header('Location:?c=Usuario&a=registro');
                                    exit;
                              } else {
                                    $errores['general'] = 'Error al registrar';
                              }
                        }
                  }
            }

            // Cargar la vista pasando los errores como dato
            require_once "views/cliente/Registro.php";
      }
}
