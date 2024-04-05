<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dame Tu Pata - Compras</title>

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="http://localhost/DameTuPata/assets/css/compra.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="#!">Dame Tu Pata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="?c=Principal&a=index">Inicio</a></li>
                </ul>
                <button type="button" class="btn btn-outline-light" onclick="location.href='?c=Carrito&a=comprar';">
                    <i class="bi-cart-fill me-1"></i> Carrito
                    <span class="badge bg-light text-danger ms-1 rounded-pill">
                    <?php
                    session_start();
                    $count = 0;
                    if (isset($_SESSION)) {
                        if (isset($_SESSION['carrito'])) {
                            foreach ($_SESSION['carrito'] as $prod) {
                                $count += $prod['Cantidad'];
                            }
                        }
                    }
                    echo $count;

                 // var_dump($_SESSION["carrito"]);
  
                    ?>
                    </span>
                </button>
               
                

            </div>
        </div>
    </nav>