<?php    session_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dame Tu Pata - Detalle de Producto</title>
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
            </div>
    </nav>
        <!-- Product section -->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <!-- Imagen del producto -->
                <img src="<?php echo 'http://localhost/DameTuPata/assets/img/'. $info["productos"]["ImagenProducto"]?>" class="card-img-top mb-5 mb-md-0" alt="Imágen de producto" />
            </div>
            <div class="col-md-6">
                <!-- Información del producto -->
                <h1 class="display-5 fw-bolder"><?php echo $info["productos"]["NombreProducto"]?></h1>
                <div class="fs-5 mb-5">
                    <span> $ <?php echo $info["productos"]["PrecioUnitario"]?></span>
                </div>
                <p class="lead"><?php echo $info["productos"]["DescripcionProducto"]?></p>
                <!-- Movemos el botón aquí -->
                <div class="text-center">
                    <a class="btn btn-outline-dark" href="?c=Compras&a=index">
                        <i class="bi bi-cart"></i> Seguir Comprando
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


       
       
        
    </body>
</html>
