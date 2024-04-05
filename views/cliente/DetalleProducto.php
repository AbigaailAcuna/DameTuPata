<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dame Tu Pata - Detalle Compra</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="http://localhost/DameTuPata/assets/css/detallecompra.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand text-white" href="#!">Dame Tu Pata</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="?c=Compras&a=index">Compras</a></li> 
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-light" href="?c=Compras&a=carrito">
                            <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <span class="badge bg-light text-danger ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img src="<?php echo 'http://localhost/DameTuPata/assets/img/'. $info["productos"]["ImagenProducto"]?>" class="card-img-top mb-5 mb-md-0"  alt="Imágen de producto" /></div>
                    <div class="col-md-6">
                        
                        <h1 class="display-5 fw-bolder"><?php echo $info["productos"]["NombreProducto"]?></h1>
                        <div class="fs-5 mb-5">
                            <span> $ <?php echo $info["productos"]["PrecioUnitario"]?></span>
                        </div>
                        <p class="lead"><?php echo $info["productos"]["DescripcionProducto"]?></p>
                        <div class="d-flex">
                         
                        <a class="btn btn-outline-danger" href="?c=Compras&a=index"><i class="bi bi-cart"> Seguir Comprando</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
       
        
    </body>
</html>
