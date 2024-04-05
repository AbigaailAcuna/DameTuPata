<?php

include 'Modelo.php';

class UsuarioModelo extends Modelo {
    private $db;
  
    public function __construct() {
        $this->db = Conectar::conexion();
    }

    public function AgregarUsuario($NombreUsuario, $IdRol, $ApellidoUsuario, $TelefonoUsuario, $DuiUsuario, $CorreoUsuario, $DireccionUsuario, $ContrasenaUsuario) {
        $sql = "INSERT INTO usuario (NombreUsuario, IdRol, ApellidoUsuario, TelefonoUsuario, DuiUsuario, CorreoUsuario, DireccionUsuario, ContrasenaUsuario) 
                VALUES (?, ?, ?, ?, ?, ?, ?, SHA2(?,256))";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('ssssssss', $NombreUsuario, $IdRol, $ApellidoUsuario, $TelefonoUsuario, $DuiUsuario, $CorreoUsuario, $DireccionUsuario, $ContrasenaUsuario);
        return $stmt->execute();
    }
    

    public function existeUsuario($correo){
        $sql = "SELECT * FROM usuario WHERE CorreoUsuario='$correo'";
        $result = $this->db->query($sql);
        return ($result->num_rows > 0);
    }

   


}
?>