<?php
class DonacionController {


    public function donacionexitosa(){
        require_once 'views/cliente/DonacionExitosa.php';

    }

    public function donacionerror(){
        require_once 'views/cliente/DonacionError.php';

    }
    public function procesarTransaccion() {
        // Verificar que se reciban los datos de la transacción
        if(isset($_POST['tx'], $_POST['amt'], $_POST['cc'],$_POST['st'])) {
            // Obtener los datos de la transacción
            $id_transaccion = $_POST['tx'];
            $cantidad_donada = $_POST['amt'];
            $moneda_transaccion = $_POST['cc'];
        //    $mensaje = $_POST['item_name'];
            $estado_transaccion = $_POST['st'];
          //  $correo_donante = $_POST['payer_email'];
            $fecha_transaccion = date('Y-m-d H:i:s'); 

            require_once "./models/DonacionModelo.php";

            $donacion_model = new DonacionModelo();
            $donacion_model->guardarDonacion($id_transaccion, $cantidad_donada, $estado_transaccion, $fecha_transaccion, $moneda_transaccion);
            
           header("Location:?c=Donacion&a=donacionexitosa");
          
            
            echo "La transacción se ha procesado correctamente.";
        } else {
            header("Location:?c=Donacion&a=donacionerror");
            echo "Error: No se han recibido los datos esperados de PayPal.";
        }
    }

   
}
?>
