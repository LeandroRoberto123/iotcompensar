<?php
require_once('config/database.php');
require_once('includes/helpers.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>Sistema de Bloqueo con Reconocimiento Facial para Arrendadores</title>
</head>

<body>
    <div class="contenedor-login">
        <form action="procesar_login.php" method="POST">
            <h1>Inicio de sesión</h1>

            <?php 
            session_start();
            if (isset($_SESSION['error'])) {
                echo '<div class="error-mensaje">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
              }
            ?>
            <label for="email">Correo electrónico: </label>
            <input type="email" id="email" name="email" placeholder="Correo electrónico..." required>
            <label for="password">Contraseña: </label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <input type="submit" value="Ingresar" name="submit_login" class="boton-iniciar-sesion">
        </form>
    </div>
</body>

</html>