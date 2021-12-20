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
            <div id="horario">
                <dl>
                    <dt>Lunes:</dt>
                    <dd> 09:00-19:00</dd>
                    <dt>Martes:</dt>
                    <dd> 09:00-19:00</dd>
                    <dt>Miercoles:</dt>
                    <dd> 09:00-19:00</dd>
                    <dt>Jueves:</dt>
                    <dd> 09:00-19:00</dd>
                    <dt>Viernes:</dt>
                    <dd> 09:00-13:00</dd>
                    <dt>Sábado:</dt>
                    <dd> 09:00-13:00</dd>
                    <dt>Domingo:</dt>
                    <dd> Cerrado</dd>

                </dl>
            </div>
            <div id="carrusel">

            </div>
            <div id="cita">
                <h2>PIDE CITA</h2>
            </div>
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

        <br>
        <hr>
        <br>
        <?php require "app/views/parts/galeria.php" ?>

        <div>

        </div>



    </section>

    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>