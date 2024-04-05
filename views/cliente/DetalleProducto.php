<?php include 'views/layouts/header.php'; ?>
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
