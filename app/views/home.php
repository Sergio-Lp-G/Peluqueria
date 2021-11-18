<!DOCTYPE html>
<html>

<head>
    <!--
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/capelloStyle.css">
    <link rel="shortcut icon" href="../img/BELLEZAcapello-favicon.jpg">
    <title>Peluquería Capelos Belleza</title> -->

    <!-- <link rel="stylesheet" type="text/css" href="../css/capelloStyle.css">
    <link rel="shortcut icon" href="../img/BELLEZAcapello-favicon.jpg"> -->
    <?php require "app/views/parts/head.php" ?>

</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <div id="redes"></div>
    <div id="tarifas"></div>
    <div>
        <p>Cancela tu cita con: 3 horas de antelación.</p>
    </div>
    <a class="nav-link" href="<?= PATH."login"?>">Usuarios</a>



    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>
</html>