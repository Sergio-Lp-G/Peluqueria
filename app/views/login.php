<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/capelloStyle.css">
    <title>Peluquería Capelos Belleza</title>

</head>

<body>
    <div id="encabezado">
        <div id="menu">
            <img src="../img/BELLEZAcapello-01.jpg" alt="logo">
            <nav></nav>
        </div>
        <div id="info">

        </div>
        <img src="" alt="foto-carrusel">
        <div id="cita"></div>
    </div>
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

</body>

</html>