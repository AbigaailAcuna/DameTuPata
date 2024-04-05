<!DOCTYPE html>
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
                <?php if (isset($errores['general'])) : ?>
                    <span style="color:red"><?php echo $errores['general']; ?></span>
                <?php endif; ?>
                <input type="text" name="NombreUsuario" id="NombreUsuario" placeholder="Nombres" value="<?php echo isset($_SESSION['NombreUsuario']) ? $_SESSION['NombreUsuario'] : ''; ?>">
                <?php if (isset($errores['NombreUsuario'])) : ?>
                    <span style="color:red"><?php echo $errores['NombreUsuario']; ?></span>
                <?php endif; ?>
                <input type="text" name="ApellidoUsuario" id="ApellidoUsuario" placeholder="Apellidos" value="<?php echo isset($_SESSION['ApellidoUsuario']) ? $_SESSION['ApellidoUsuario'] : ''; ?>">
                <?php if (isset($errores['ApellidoUsuario'])) : ?>
                    <span style="color:red"><?php echo $errores['ApellidoUsuario']; ?></span>
                <?php endif; ?>
                <input type="text" name="TelefonoUsuario" id="TelefonoUsuario" placeholder="Teléfono" value="<?php echo isset($_SESSION['TelefonoUsuario']) ? $_SESSION['TelefonoUsuario'] : ''; ?>">
                <?php if (isset($errores['TelefonoUsuario'])) : ?>
                    <span style="color:red"><?php echo $errores['TelefonoUsuario']; ?></span>
                <?php endif; ?>
                <input type="text" name="DireccionUsuario" id="DireccionUsuario" placeholder="Dirección" value="<?php echo isset($_SESSION['DireccionUsuario']) ? $_SESSION['DireccionUsuario'] : ''; ?>">
                <?php if (isset($errores['DireccionUsuario'])) : ?>
                    <span style="color:red"><?php echo $errores['DireccionUsuario']; ?></span>
                <?php endif; ?>
                <input type="text" name="DuiUsuario" id="DuiUsuario" placeholder="Dui" value="<?php echo isset($_SESSION['DuiUsuario']) ? $_SESSION['DuiUsuario'] : ''; ?>">
                <?php if (isset($errores['DuiUsuario'])) : ?>
                    <span style="color:red"><?php echo $errores['DuiUsuario']; ?></span>
                <?php endif; ?>
                <input type="email" name="CorreoUsuario" id="CorreoUsuario" placeholder="Correo" value="<?php echo isset($_SESSION['CorreoUsuario']) ? $_SESSION['CorreoUsuario'] : ''; ?>">
                <?php if (isset($errores['CorreoUsuario'])) : ?>
                    <span style="color:red"><?php echo $errores['CorreoUsuario']; ?></span>
                <?php endif; ?>
                <input type="password" name="ContrasenaUsuario" id="ContrasenaUsuario" placeholder="Contraseña">
                <?php if (isset($errores['ContrasenaUsuario'])) : ?>
                    <span style="color:red"><?php echo $errores['ContrasenaUsuario']; ?></span>
                <?php endif; ?>

                <button name="signup" id="signup">Registrarse</button>



                <p class="message">¿Ya posees una cuenta?<a href="?c=Compras&a=index"> Iniciar Sesión</a></p>
            </form>
        </div>
    </div>
</body>

</html>