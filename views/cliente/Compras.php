<?php include 'views/layouts/header.php'; ?>
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
                                    <a class="btn btn-outline-danger" href="?c=Carrito&a=agregar&id=<?php echo $dato["IdProducto"] ?>"><i class="bi bi-cart"></i></a>

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