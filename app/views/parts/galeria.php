<h2>Galería de nuestras clientas</h2>
<p>!Aquí podrías estar tú!</p>
<div id="fotoGaleria">
    <?php
    $directory = "img/galeria";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false) {
        echo  '<div class="galeria">';
        echo '<img src="' . $directory . "/" . $archivo . '">' . "\n";
        echo  '</div>';
    }
    $dirint->close();
    ?>
</div>