<?php var_dump($_SESSION) ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dame tu Pata - Registro de usuario</title>
    <link href="http://localhost/DameTuPata/assets/css/registro.css" rel="stylesheet" />
</head>

<body>
    <div class="r-page">
        <div class="form">
            <form class="login-form" method="POST" action="?c=Usuario&a=registrar">
                <h1>Registro</h1>
                <?php if (!empty($_SESSION['error'])) : ?>
                    <div class="redmessagee"><?php echo $_SESSION['error'];
                 ?></div><br>
                <?php endif; ?>


                <input type="text" name="NombreUsuario" id="NombreUsuario" placeholder="Nombres" value="<?php echo isset($_SESSION['NombreUsuario']) ? $_SESSION['NombreUsuario'] : ''; ?>">
                <?php if (!empty($_SESSION['errors']['NombreUsuario'])) : ?>
                    <div class="redmessagee"><?php echo $_SESSION['errors']['NombreUsuario'];
                    // unset($_SESSION['errors']['nombres']);
                 ?></div><br>
                <?php endif; ?>

                <input type="text" name="ApellidoUsuario" id="ApellidoUsuario" placeholder="Apellidos" value="<?php echo isset($_SESSION['ApellidoUsuario']) ? $_SESSION['ApellidoUsuario'] : ''; ?>">
                <?php if (!empty($_SESSION['errors']['ApellidoUsuario'])) : ?>
                    <div class="redmessagee"><?php echo $_SESSION['errors']['ApellidoUsuario']; ?></div><br>
                <?php endif; ?>

                <input type="text" name="TelefonoUsuario" id="TelefonoUsuario" placeholder="Teléfono" value="<?php echo isset($_SESSION['TelefonoUsuario']) ? $_SESSION['TelefonoUsuario'] : ''; ?>">
                <?php if (!empty($_SESSION['errors']['TelefonoUsuario'])) : ?>
                    <div class="redmessagee"><?php echo $_SESSION['errors']['TelefonoUsuario'];?></div><br>
                <?php endif; ?>

                <input type="text" name="DireccionUsuario" id="DireccionUsuario" placeholder="Dirección" value="<?php echo isset($_SESSION['DireccionUsuario']) ? $_SESSION['DireccionUsuario'] : ''; ?>">
                <?php if (!empty($_SESSION['errors']['DireccionUsuario'])) : ?>
                    <div class="redmessagee"><?php echo $_SESSION['errors']['DireccionUsuario'];
                ?></div><br>
                <?php endif; ?>

                <input type="text" name="DuiUsuario" id="DuiUsuario" placeholder="Dui" value="<?php echo isset($_SESSION['DuiUsuario']) ? $_SESSION['DuiUsuario'] : ''; ?>">
                <?php if (!empty($_SESSION['errors']['DuiUsuario'])) : ?>
                    <div class="redmessagee"><?php echo $_SESSION['errors']['DuiUsuario'];
               ?></div><br>
                <?php endif; ?>

                <input type="email" name="CorreoUsuario" id="CorreoUsuario" placeholder="Correo" value="<?php echo isset($_SESSION['CorreoUsuario']) ? $_SESSION['CorreoUsuario'] : ''; ?>">
                <?php if (!empty($_SESSION['errors']['CorreoUsuario'])) : ?>
                    <div class="redmessagee"><?php echo $_SESSION['errors']['CorreoUsuario'];
                ?></div><br>
                <?php endif; ?>

                <input type="password" name="ContrasenaUsuario" id="ContrasenaUsuario" placeholder="Contraseña" >
                <?php if (!empty($_SESSION['errors']['ContrasenaUsuario'])) : ?>
                    <div class="redmessagee"><?php echo $_SESSION['errors']['ContrasenaUsuario'];
                ?></div><br>
                <?php endif; ?>

                <button name="signup" id="signup">Registrarse</button>

                <?php
               
                if (isset($_SESSION['error'])) {
                    echo '<div class="messageerror">';
                    echo '' . $_SESSION['error'] . '';
                    echo '</div>';
                    unset($_SESSION['error']);
                }
                ?>

                <p class="message">¿Ya posees una cuenta?<a href="?c=Compras&a=index"> Iniciar Sesión</a></p>
            </form>
        </div>
    </div>
</body>

</html>