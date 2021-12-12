<h2>Galería de nuestras clientas</h2>
<p>!Aquí podrías estar tú!</p>
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