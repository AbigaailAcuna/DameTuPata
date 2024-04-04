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
    <link href="http://localhost/DameTuPata/assets/css/compras.css" rel="stylesheet" />
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
                    <form class="d-flex">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-light text-danger ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    <!-- Header-->
    <header class="bg-light py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-danger">
                <h1 class="display-4 fw-bolder">Dame Tu Pata Tienda en línea</h1>
                <p class="lead fw-normal text-danger-50 mb-0">¡Descubre los mejores productos para tu mascota!</p>
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
                                    <a class="btn btn-outline-danger" href="?c=Compras&a=detalle&id=<?php echo $dato["IdProducto"] ?>"><i class="bi bi-eyeglasses"></i></a>
                                    <a  class="btn btn-outline-danger" href="?"><i class="bi bi-cart"></i></a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="http://localhost/DameTuPata/assets/js/compras.js"></script>
</body>

</html>
