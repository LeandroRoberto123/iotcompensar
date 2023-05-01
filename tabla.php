<?php
require_once('config/database.php');
require_once('includes/helpers.php');
$info = getInfo($conexion);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>Tabla de información</title>
</head>

<body>

    <?php 
    session_start();
    if (isset($_SESSION['usuario_login'])) : ?>
    <h3 id="h3-info">Bienvenido,
        <?= $_SESSION['usuario_login']['name'] . ' ' . $_SESSION['usuario_login']['surname'] ?></h3>
    <a href="cerrar.php" class="boton">Cerrar Sesión</a>
    <?php endif; ?>
    <div class="container">
        <h1 id="h1-info">Tabla de información</h1>
        <div class="tabla-contenedor">
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Identificación</th>
                        <th>Dirección</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($persona = mysqli_fetch_assoc($info)) : ?>
                    <tr>
                        <td><?= $persona['nombre']  ?></td>
                        <td><?= $persona['identificacion']  ?></td>
                        <td><?= $persona['direccion']  ?></td>
                        <td><?php echo isset($persona['estado']) && $persona['estado'] == 1 ? 'Conocido' : 'Desconocido'  ?>
                        </td>
                    </tr>
                    <?php
                      endwhile; 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>