<!DOCTYPE html>
<html>

<head>
    <!--
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/capelloStyle.css">
    <link rel="shortcut icon" href="../img/BELLEZAcapello-favicon.jpg">
    <title>Peluquería Capelos Belleza</title> -->

    <!--<link rel="stylesheet" type="text/css" href="../css/capelloStyle.css">
     <link rel="shortcut icon" href="../img/BELLEZAcapello-favicon.jpg"> -->
    <?php require "app/views/parts/head.php" ?>

</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <section>
        <div id="info">
            <div id="horario"></div>
            <div id="carrusel"></div>
        </div>
        <?php require "app/views/parts/redes.php" ?>

        <div id="tarifas">
            <?php require "app/views/servicio/showPart.php" ?>

        </div>
        <div>
            <p>Cancela tu cita con: 3 horas de antelación.</p>
        </div>

        <div>
            <p>_______Aprende con nosotros_______</p>
            <div id="videoLearn">
                <iframe src="https://www.youtube.com/embed/My-snxJBp8M" width="200" height="150" muted></iframe>
                <iframe src="https://www.youtube.com/embed/My-snxJBp8M" width="200" height="150" muted></iframe>
                <iframe src="https://www.youtube.com/embed/My-snxJBp8M" width="200" height="150" muted></iframe>
                <iframe src="https://www.youtube.com/embed/My-snxJBp8M" width="200" height="150" muted></iframe>
                <iframe src="https://www.youtube.com/embed/My-snxJBp8M" width="200" height="150" muted></iframe>
            </div>
        </div>
        <!--<a class="nav-link" href="<?= PATH . "login" ?>">Usuarios</a>
    -->
        <?php require "app/views/parts/galeria.php" ?>

        <div>

        </div>



    </section>

    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>