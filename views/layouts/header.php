<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
   

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="http://localhost/DameTuPata/assets/css/compra.css" rel="stylesheet" />
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="http://localhost/DameTuPata/assets/js/compras.js"></script>
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
                <?php session_start();
              if(isset($_SESSION['login_data']) && !is_null($_SESSION['login_data'])) {  ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link ms-3" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end ms-3" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?c=Usuario&a=iniciosesion">Iniciar Sesión</a></li>
                            <li><a class="dropdown-item" href="?c=Usuario&a=registrar">Registrarse</a></li>
                            <li><a class="dropdown-item" href="?c=Usuario&a=logout">Cerrar Sesión</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href=""><?= $_SESSION['login_data']['CorreoUsuario'] ?></a></li>
                        </ul>
                    </div>
                <?php } else { ?>
                    
                    <div class="nav-item dropdown">
                        <a class="nav-link ms-3" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end ms-3" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?c=Usuario&a=iniciosesion">Iniciar Sesión</a></li>
                            <li><a class="dropdown-item" href="?c=Usuario&a=registrar">Registrarse</a></li>
                            <li><a class="dropdown-item" href="?c=Usuario&a=logout">Cerrar Sesión</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            
                        </ul>
                    </div>
                <?php
                } ?>
         <?php 
            if(isset($_SESSION['login_data']) && !is_null($_SESSION['login_data'])){
                ?>
                <button type="button" class="btn btn-outline-light ms-3" onclick="location.href='?c=Carrito&a=comprar';">
                    <i class="bi-cart-fill me-1"></i> Carrito
                    <span class="badge bg-light text-danger ms-1 rounded-pill">
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

                        // var_dump($_SESSION["carrito"]);

                        ?>
                    </span>
                </button>
                <?php
        }
                ?>



            </div>
        </div>
    </nav>