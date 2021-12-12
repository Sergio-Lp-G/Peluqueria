<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>

<?php require "app/views/parts/header.php" ?>

<main role="main" class="container">
    <div class="starter-template">

        <h1>Alta de trabajador</h1>

        <form method="post" action="<?= PATH."trabajadorservicio/store"?>">

            <div class="form-group">
                <input type="hidden" name="trabajador_id" value="<?php echo $trabajador->id ?>"
                <label>Categoría</label>
                <select name="servicio_id" class="form-control">
                    <?php
                    foreach ($servicios  as $key => $servicio) { ?>
                        <option value="<? echo $servicio->id ?>"><?php echo $servicio->nombre ?></option>
                        ?> <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary boton">Enviar</button>
        </form>
    </div>

</main><!-- /.container -->
<?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>