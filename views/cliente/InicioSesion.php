<?php
var_dump($_SESSION);
error_reporting(E_ERROR|E_PARSE);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dame Tu Pata - Inicio de Sesión</title>
    <link href="http://localhost/DameTuPata/assets/css/registro.css" rel="stylesheet" />
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="?c=Usuario&a=validarusuario" method="POST">
                <h1>Inicio de Sesión</h1>
                <input type="email" name="CorreoUsuario" id="CorreoUsuario" placeholder="Correo" />
                <?php if (!empty($_SESSION['errors']['CorreoUsuario'])) : ?>
                    <div class="redmessagee"><?php echo $_SESSION['errors']['CorreoUsuario'];
                                                ?></div><br>
                <?php endif; ?>
                <input type="password" name="ContrasenaUsuario" id="ContrasenaUsuario" placeholder="Contraseña" />
                <?php if (!empty($_SESSION['errors']['ContrasenaUsuario'])) : ?>
                    <div class="redmessagee"><?php echo $_SESSION['errors']['ContrasenaUsuario'];
                                                ?></div><br>
                <?php endif; ?>
                <button name="login" id="login">Iniciar Sesión</button>

                <?php
                if (isset($_SESSION['error'])) {
                    echo '<div class="messageerror">';
                    echo '' . $_SESSION['error'] . '';
                    echo '</div>';
                    unset($_SESSION['error']);
                   
                }
              
                ?>

            </form>
        </div>
    </div>
</body>

</html>