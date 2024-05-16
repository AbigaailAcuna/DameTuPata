<?php    session_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dametupataSV</title>
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/principal.css">
    <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/adopciones.css">
    <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/compra.css">
    <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/swiper-bundle.min.css">
    <link rel="icon" href="http://localhost/DameTuPata/assets/img/logos/logo.png" type="image/x-icon">
</head>

<body>

    <!-- Topbar Start -->
    <div class="top container-fluid d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+503 7519 1919</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>dametupatasv@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <a class="px-2" href="https://www.facebook.com/dametupatasv/?locale=es_LA">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="px-2" href="https://twitter.com/DameTuPatasv?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="px-2" href="https://www.instagram.com/dametupatasv/?hl=es">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="?c=Principal&a=index">
                <h1 class="m-0">
                    <img src="http://localhost/DameTuPata/assets/img/logos/logo.png" class="logo"> Dame Tu Pata
                </h1>
            </a>
                <?php
                if (isset($_SESSION['login_data']) && !is_null($_SESSION['login_data'])) {
                ?>
                    <button type="button" class="btn btn-outline-dark ms-3" onclick="location.href='?c=Carrito&a=comprar';">
                        <i class="bi-cart-fill me-1"></i> Carrito
                        <span class="badge bg-light text-dark ms-1 rounded-pill">
                            <?php
                            $count = 0;
                            if (isset($_SESSION)) {
                                if (isset($_SESSION['carrito'])) {
                                    foreach ($_SESSION['carrito'] as $prod) {
                                        $count += $prod['Cantidad'];
                                    }
                                }
                            }
                            echo $count;
                            ?>
                        </span>
                    </button>
                <?php } ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!--Productos-->
                            <div class="col-sm-9">
                                <div class="me-2">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="ms-2 mt-2">Detalle de Carrito</h5>
                                        <a class="btn btn-outline-dark" href="?c=Compras&a=index"><i class="bi bi-cart-plus"></i> Seguir Comprando</a>
                                    </div>
                                    <hr class="mt-2 mb-2">
                                    <div id="productos-carrito">
                                        <div class="card mb-2 card-producto">
                                            <!--acá productos agregados-->
                                            <?php

                                         
                                            error_reporting(E_ERROR | E_PARSE);
                                           
                                            
                                            // Verificar si hay datos en la sesión 'carrito'
                                            if (isset($_SESSION['carrito'])) {
                                                $carrito = $_SESSION['carrito'];
                                            }

                                            
                                            if (isset($carrito) && count($carrito) && $validate != 1) {
                                                for ($i = 0; $i < count($carrito); $i++) {

                                            ?>
                                                    <div class="card-body">
                                                        <div class="row">

                                                            <div class="col-sm-2 align-self-center d-flex justify-content-center">
                                                                <!--imagen-->
                                                                <img class="rounded" src="<?php echo 'http://localhost/DameTuPata/assets/img/' . $carrito[$i]['ImagenProducto'] ?>" style="width:100px;height:100px" />
                                                            </div>

                                                            <div class="col-sm-4 align-self-center">
                                                                <span class="font-wight-bold d-block"></span>
                                                                <span><?php echo $carrito[$i]['NombreProducto'] ?></span>
                                                            </div>

                                                            <div class="col-sm-2 align-self-center">
                                                                <span>$<?php echo  $carrito[$i]['PrecioUnitario'] ?></span>
                                                            </div>

                                                            <div class="col-sm-2 align-self-center">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-outline-secondary btn-restar rounded-0" href="?c=Carrito&a=restar&id=<?php echo $carrito[$i]['Id']; ?>"><i class="bi bi-dash"></i></a>
                                                                    <input class="form-control input-cantidad p-1 text-center rounded-0" disabled style="width:40px" value="<?php echo $carrito[$i]['Cantidad'] ?>" />
                                                                    <a class="btn btn-outline-secondary btn-sumar rounded-0" href="?c=Carrito&a=sumar&id=<?php echo $carrito[$i]['Id']; ?>"><i class="bi bi-plus"></i></a>
                                                                </div>


                                                            </div>
                                                            <div class="col-sm-2 align-self-center">
                                                                <a class="btn btn-outline-danger " href="?c=Carrito&a=borrar&id=<?php echo $carrito[$i]['Id']; ?>"><i class="bi bi-trash"></i></a>
                                                                <!-- <a href="?c=Principal&a=borrar&id=" class="btn btn-danger btn-sm btnEliminar" data-id=""><i class="bi bi-trash"></i></a>-->
                                                            </div>


                                                        </div>
                                                    </div>

                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>
                                <?php
                                $suma = 0;
                                if ($carrito > 0) {
                                    for ($i = 0; $i < count($carrito); $i++) {
                                        $subtotal = $carrito[$i]['PrecioUnitario'] * $carrito[$i]['Cantidad'];
                                        $suma = $suma + $subtotal;
                                    }
                                }
                                // var_dump($carrito);


                                ?>
                                <h5>Precio Total: </h5>
                                <?= '$' . ($validate != 1 ? number_format($suma, 2) :  number_format(0, 2)) ?>
                            </div>
                            <!--Pago-->
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Datos de Pago</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        if (isset($carrito) && count($carrito)) {
                                              
                                            if ($validate != 1) {
                                        ?>

                                                <form action="<?="?c=Carrito&a=comprar" ?>" method="POST">
                                                    <div class="mb-3">
                                                        <label for="nombre" class="form-label">Nombre: </label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                                            <input type="text" class="form-control form-control-sm" name="nombre" value="<?= $validate == -1 ? '' : $nombre ?>">
                                                        </div>
                                                        <?= $validate == 0 ? "<p class='text-danger'>" . $errors['nombre'] . "</p>" : "" ?>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="apellido" class="form-label">Apellido: </label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                                            <input type="text" class="form-control form-control-sm" name="apellido" value="<?= $validate == -1 ? '' : $apellido ?>">
                                                        </div>
                                                        <?= $validate == 0 ? "<p class='text-danger'>" . $errors['apellido'] . "</p>" : "" ?>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="cnumero" class="form-label">Número de tarjeta: </label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-credit-card"></i></span>
                                                            <input type="text" class="form-control form-control-sm" name="numTarjeta" value="<?= $validate == -1 ? '' : $numTarjeta ?>" id="credit-num">
                                                        </div>
                                                        <?= $validate == 0 ? "<p class='text-danger'>" . $errors['numTarjeta'] . "</p>" : "" ?>
                                                        <script src="./recursos/js/inputCreditCard.js"></script>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="fecha" class="form-label">Fecha Expiración: </label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                                                            <input type="month" class="form-control form-control-sm" name="fechaExp" value="<?= $validate == -1 ? '' : $fechaExp ?>">
                                                        </div>
                                                        <?= $validate == 0 ? "<p class='text-danger'>" . $errors['fechaExp'] . "</p>" : "" ?>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="cvv" class="form-label">CVV: </label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-credit-card-2-back"></i></span>
                                                            <input type="text" class="form-control form-control-sm" name="cvv" value="<?= $validate == -1 ? '' : $cvv ?>">
                                                        </div>
                                                        <?= $validate == 0 ? "<p class='text-danger'>" . $errors['cvv'] . "</p>" : "" ?>
                                                    </div>

                                                    <div class="d-grid">
                                                        <button class="btn btn-success" type="submit" name="pagar"><i class="bi bi-credit-card-2-front"> Procesar Pago</i></button>
                                                    </div>
                                                </form>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="pay-verify-container d-flex justify-content-center flex-column align-items-center">
                                                    <img src="http://localhost/DameTuPata/assets/animation/verify.gif" class="pay-verify-img">
                                                    <p class="text-success">Su pago se ha realizado con éxito</p>
                                                    <a href="?c=Venta&a=FinalizarCompra" class="btn btn-primary">Aceptar</a>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        <?php
                                        } else {
                                        ?>
                                            <h6 class="text-danger">Agregue productos al carrito antes de realizar su pago</h6>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>