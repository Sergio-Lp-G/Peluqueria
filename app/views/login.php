<!DOCTYPE html>
<html>

<head>
    <!-- <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/capelloStyle.css">
    <link rel="shortcut icon" href="../img/BELLEZAcapello-favicon.jpg">
    <title>Peluquería Capelos Belleza</title> -->
    <?php require "app/views/parts/head.php" ?>

</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <div id="redes"></div>
    <div id="tarifas"></div>
    <div>
        <p>Cancela tu cita con: 3 horas de antelación.</p>
    </div>
    <div id="newTrabajador">

        <form id="formulario_trabajador_new" method="POST" action="capelos-belleza/login/save_trabajador">
            <label>Nombre: </label><input type="text" value="" name="nombre"><br>
            <label>Apellidos: </label><input type="text" value="" name="apellidos"><br>
            <label>Teléfono: </label><input type="number" value="" name="telefono"><br>
            <label>Email: </label><input type="text" value="" name="email"><br>
            <label>Usuario: </label><input type="text" value="" name="login"><br>
            <label>Contraseña: </label><input type="password" value="" name="password"><br>

            <input type="submit" value="enviar">
        </form>

    </div>


    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>