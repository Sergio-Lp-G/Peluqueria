<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle del servicio <?php echo $servicio->id ?></h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $servicio->nombre ?></li>
            <li><strong>Categoría: </strong><?php echo $servicio->categoria ?></li>
            <li><strong>Duración: </strong><?php echo $servicio->duracion ?></li>
            <li><strong>Precio: </strong><?php echo $servicio->precio ?></li>
        </ul>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>