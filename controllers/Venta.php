<?php
session_start();
require_once './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer as PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\SMTP;

use Dompdf\Dompdf;

class VentaController
{
    public function FinalizarCompra()
    {
        $total = 0;

        require_once "./models/ComprasModelo.php";

        $productos = new ComprasModelo();

        if (isset($_SESSION['login_data']) && isset($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $producto) {
                $subtotal = $producto['Cantidad'] * $producto['PrecioUnitario'];
                $total += $subtotal;

                $compra = [
                    'IdUsuario' => $_SESSION['login_data']['IdUsuario'],
                    'IdProducto' => $producto['Id'],
                    'FechaCompra' => date("Y-m-d"),
                    'Cantidad' => $producto['Cantidad']
                ];

                $productos->InsertarCompra($compra);

                $nuevacantidad = $producto['CantidadProducto'] - $producto['Cantidad'];

                $productos->ActualizarCantidad($producto['Id'], $nuevacantidad);
            }

            try {
                $html = '<html>
<head>
<meta charset="UTF-8">
<title>Confirmación de compra</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #fce4ec;
        padding: 30px;
    }
    h1, h2, h3 {
        color: #d32f2f;
        text-align: center;
        margin-bottom: 30px;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px;
    }
    th, td {
        border: 1px solid #d32f2f;
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #ffcdd2;
    }
    .text-center {
        text-align: center;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Fundación Dame Tu Pata</h1>
    <h2>Confirmación de compra</h2>
    <p class="text-center">Gracias por comprar con nosotros. A continuación, te presentamos los detalles de tu compra:</p>
    
    <h3>Información del comprador:</h3>
    <p><strong>Nombre:</strong> ' . $_SESSION['login_data']['NombreUsuario'] . ' ' . $_SESSION['login_data']['ApellidoUsuario']  . '</p>
    <p><strong>Correo electrónico:</strong> ' . $_SESSION['login_data']['CorreoUsuario'] . '</p>
    <p><strong>Fecha de compra:</strong> ' . date("Y-m-d") . '</p>
   
    
    <h3>Detalles de la compra:</h3>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio unitario</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>';

                foreach ($_SESSION['carrito'] as $product) {
                    $total_producto = $product['Cantidad'] * $product['PrecioUnitario'];
                    $html .= '<tr>
                <td>' . $product['NombreProducto'] . '</td>
                <td>$' . $product['PrecioUnitario'] . '</td>
                <td>' . $product['Cantidad'] . '</td>
                <td>$' . number_format($total_producto, 2) . '</td>
            </tr>';
                }

                $html .= '</tbody>
    </table>
    
    <h3>Total de la compra:</h3>
    <p class="text-center">El total de la compra es: $' . number_format($total, 2) . '</p>
</div>
</body>
</html>';

                $random_number = mt_rand();

                $dompdf = new Dompdf();
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'vertical');
                $dompdf->render();

                $filename = 'Compra_' . $_SESSION['login_data']['CorreoUsuario'] . '_' . $random_number . '.pdf';
                $filepath = './Pdf/' . $filename;
                file_put_contents($filepath, $dompdf->output());

                // Mandar correo
                require('./PHPMailer/PHPMailer.php');
                require('./PHPMailer/SMTP.php');
                require('./PHPMailer/Exception.php');
                
             
                $mail = new PHPMailer(true);
              //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'erikaacuna671@gmail.com';
                $mail->Password   = 'gjwzhxgatxkwixpz';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                $mail->setFrom('dametupata103@gmail.com', 'Fundación Dame Tu Pata');
                $mail->addAddress($_SESSION['login_data']['CorreoUsuario']);

                $mail->isHTML(true);
                $mail->Subject = 'Comprobante de compra ' . date('Ymd_His');
                $mail->Body    = 'A continuación te enviamos un archivo PDF como comprobante de compra.';
                $mail->addAttachment($filepath);
                $mail->send();

                if (!$mail->send()) {
                    throw new Exception($mail->ErrorInfo);
                }

                header('Location:?c=Compras&a=index');

                unset($_SESSION['carrito']);
            } catch (Exception $e) {
                echo 'Error al generar el PDF o enviar el correo: ' . $e->getMessage();
            }

            require_once "views/cliente/Carrito.php";
        } else {
            var_dump("Error: no hay sesión iniciada o no hay productos en el carrito");
        }
    }
}
