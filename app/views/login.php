<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/capelloStyle.css">
    <title>Peluquería Capelos Belleza</title>

</head>

<body>
    <?php require "app/views/header.php" ?>
    <div id="redes"></div>
    <div id="tarifas"></div>
    <div>
        <p>Cancela tu cita con: 3 horas de antelación.</p>
    </div>
    <div id="newTrabajador">

        <form id="formulario_trabajador_new" method="POST" action="/login/save_trabajador">
            <label>Nombre: </label><input type="text" value="" name="nombre"><br>
            <label>Apellidos: </label><input type="text" value="" name="apellidos"><br>
            <label>Teléfono: </label><input type="text" value="" name="telefono"><br>

            <input type="submit" value="enviar">
        </form>

    </div>


    <?php require "app/views/footer.php" ?>
</body>

</html>