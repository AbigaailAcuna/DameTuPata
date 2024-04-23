<?php
session_start();
require_once './vendor/autoload.php';
use Dompdf\Dompdf;

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
              //  $total += $producto['CantidadProducto'] * $producto['PrecioUnitario'];

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

           
            // Generando PDF
        try {
            $html = '<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmación de compra</title>
    <style>
        body {
            font-family: "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
            background-color: #fff;
            padding: 30px;
        }
        h1 {
            font-size: 36pt;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        h3 {
            font-size: 24pt;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }
        .coupon {
            display: inline-block;
            width: 80%;
            border: 2px solid #333;
            background-color: #f2f2f2;
            padding: 20px;
            margin-bottom: 30px;
        }
        .coupon h3 {
            font-size: 28pt;
            margin-bottom: 20px;
        }
        .coupon p {
            font-size: 18pt;
            margin-bottom: 10px;
        }
        .coupon .total {
            font-size: 24pt;
            font-weight: bold;
            margin-top: 20px;
            text-align: right;
        }
        #header {
            margin-bottom: 30px;
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        #header h2 {
            font-size: 36pt;
            font-weight: bold;
            color: #333;
        }
        #message {
            font-size: 18pt;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            margin-bottom: 40px;
            width: 100%;
            padding: 20px;
            table-layout: fixed;
        }
        th, td {
            border: 1px solid #fff;
            padding: 12px;
        }
        th {
            background-color: #eee;
            font-weight: bold;
        }
        td {
            font-weight: 600;
        }
        tbody tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.3);
        }
        tfoot td {
            border-top: 2px solid #fff;
            font-weight: bold;
            font-size: 16pt;
            padding-top: 20px;
        }
        tfoot td:last-child {
            font-size: 18pt;
        }
    </style>
</head>
<body>
    <div id="header">
        <h2> Fundación Dame Tu Pata</h2>
    </div>
    <div id="message">
        <p>Gracias por comprar con nosotros, a continuación tienes el detalle de tus productos adquiridos:</p>
    </div>
    <h3>Detalles de compra</h3>';

            foreach ($_SESSION['carrito'] as $product) {
                // Generando un div para separar cada cupon en cuadros que representan cupones
                $html .= '<div class="coupon">
      <h3>' . $product['NombreProducto'] . '</h3>
      <p>Precio: $' . $product['PrecioUnitario'] . '</p>
      <p>Cantidad: ' . $product['Cantidad'] . '</p>
  </div>';
            }

       //    $html .= '<h3>Precio: $' . $total . '</h3>';
            $html .= '<div style="page-break-after: always;"></div>';

            $dompdf = new Dompdf();
            // Cargar el contenido dentro de Dompdf
            $dompdf->loadHtml($html);
            // Setear el tamaño de página
            $dompdf->setPaper('A4', 'vertical');

            // Renderizar el PDF
            $dompdf->render();

            // Generar el nombre de archivo con la fecha y hora actual
            $filename = 'Producto_' . $_SESSION['login_data']['CorreoUsuario'] . '_' . date('Ymd_His') . '.pdf';
            // Ruta donde se guardará el archivo PDF
            $filepath = './Pdf/' . $filename;
            // Guardar el archivo PDF en la ruta especificada
            file_put_contents($filepath, $dompdf->output());

            header('Location:?c=Compras&a=index');

            unset($_SESSION['carrito']);

           

            // Redireccionar o mostrar algún mensaje de éxito
        } catch (\Exception $e) {
            echo 'Error al generar el PDF: ' . $e->getMessage();
        }
       

        require_once "views/cliente/Carrito.php";

        } else {
            var_dump("Error: no hay sesión iniciada o no hay productos en el carrito");
        }
       
           }
}
?>
