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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="?c=Principal&a=index" class="nav-item nav-link active">Inicio</a>
                    <a href="?c=Principal&a=adopciones" class="nav-item nav-link">Adoptar</a>
                    <a href="?c=Principal&a=donaciones" class="nav-item nav-link">Donar</a>
                    <a href="?c=Compras&a=index" class="nav-item nav-link">Tienda Solidaria</a>
                </div>
                <?php 
             
                if (isset($_SESSION['login_data']) && !is_null($_SESSION['login_data'])) { ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link ms-3" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill" style="font-size: 1.5rem; color: rgb(0, 0, 0);"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end ms-3" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?c=Usuario&a=iniciosesion">Iniciar Sesión</a></li>
                            <li><a class="dropdown-item" href="?c=Usuario&a=registrar">Registrarse</a></li>
                            <li><a class="dropdown-item" href="?c=Usuario&a=logout">Cerrar Sesión</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href=""><?= $_SESSION['login_data']['CorreoUsuario'] ?></a></li>
                        </ul>
                    </div>
                <?php } else { ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link ms-3" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill" style="font-size: 1.5rem; color: rgb(0, 0, 0);"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end ms-3" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?c=Usuario&a=iniciosesion">Iniciar Sesión</a></li>
                            <li><a class="dropdown-item" href="?c=Usuario&a=registrar">Registrarse</a></li>
                            <li><a class="dropdown-item" href="?c=Usuario&a=logout">Cerrar Sesión</a></li>
                            <li><hr class="dropdown-divider" /></li>
                        </ul>
                    </div>
                <?php } ?>
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

    <!-- Header-->
    <header class="masthead">
        <div class="container py-5">
            <div class="text-center text-danger">
                <h1 class="masthead-subheading">RESCATAR SALVA VIDAS!</h1>
                <h2 class="masthead-heading text-uppercase">RESCATAMOS Y FOMENTAMOS LA ADOPCIÓN DE PERROS ABANDONADOS DE EL SALVADOR</h2>
                <a class="btn btn-danger my-3" href="?c=Principal&a=index">VER MÁS</a>
            </div>
        </div>
    </header>

    <!-- Section Productos-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($info['productos'] as $dato) { ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img src="<?php echo 'http://localhost/DameTuPata/assets/img/' . $dato["ImagenProducto"] ?>" class="card-img-top" alt="imágenes de productos" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $dato["NombreProducto"] ?></h5>
                                    <!-- Product price-->
                                    <span class="price text-black"><?php echo '$' . $dato["PrecioUnitario"] ?></span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark" href="?c=Compras&a=detalle&id=<?php echo $dato["IdProducto"] ?>"><i class="bi bi-eyeglasses"></i></a>
                                    <a class="btn btn-outline-dark" href="?c=Carrito&a=agregar&id=<?php echo $dato["IdProducto"] ?>"><i class="bi bi-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.1.1/swiper-bundle.min.js"></script>
    <!-- Custom Navbar JS -->
    <script src="http://localhost/DameTuPata/assets/js/navbar.js"></script>
</body>

</html>
