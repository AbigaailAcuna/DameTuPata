<?php 

 include 'views/layouts/header.php';
//var_dump($_SESSION);
?>
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
                                        <a class="btn btn-outline-danger" href="?c=Compras&a=index"><i class="bi bi-cart-plus"></i> Seguir Comprando</a>
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