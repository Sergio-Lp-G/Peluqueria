<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Alta de servicio</h1>
    
    <form method="post" action="<?= PATH."servicio/store"?>">

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Categoría</label>
        <select name="category" class="form-control">
            <option value="corte">Corte</option>
            <option value="peinado">Peinado</option>
            <option value="coloracion">Coloracion</option>
            <option value="cambio_temporal">Cambio temporal</option>
        </select>
    </div>
    <div class="form-group">
        <label>Duracion</label>
        <input type="text" name="time" class="form-control">
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="price" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>