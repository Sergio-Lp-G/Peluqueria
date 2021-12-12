<h2>Galería de nuestras clientas</h2>
<p>¡Aquí podrías estar tú!</p>
<?php if (isset($_SESSION['trabajador'])) { ?>
    <a href="<?= PATH . "servicio/edit/" . $servicio->id ?>" class="boton btn btn-primary">Añadir imagen</a>
    <a href="<?= PATH . "servicio/delete/" . $servicio->id ?>" class="boton btn btn-primary">Borrar </a>
<?php } ?>
<div id="fotoGaleria">
    <?php
    $directory = "img/galeria";
    $dirint = scandir($directory);

    foreach ( $dirint as $archivo ) {
        if (!($archivo == "." || $archivo == "..")) {
            echo '<div class="galeria">';
            echo '<img src="' . $directory . "/" . $archivo . '">' . "\n";
            echo '</div>';
        }
    }
    ?>
</div>