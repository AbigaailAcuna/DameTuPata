<?php
include 'Modelo.php';

class DonacionModelo extends Modelo {
    private $db;

    public function __construct() {
        // Llamamos a la conexión
        $this->db = Conectar::conexion();
    }

    public function guardarDonacion($id_transaccion, $cantidad_donada, $estado_transaccion, $fecha_transaccion, $moneda_transaccion) {
        // Consulta SQL para insertar los datos de la donación en la base de datos
        $sql = "INSERT INTO detalledonacion (id_transaccion, cantidad_donada, estado_transaccion, fecha_transaccion, moneda_transaccion)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('sssss', $id_transaccion, $cantidad_donada, $estado_transaccion, $fecha_transaccion, $moneda_transaccion);
        return $stmt->execute();
    }
    
    
}
?>
