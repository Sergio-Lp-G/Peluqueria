<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de servicio</h1>
      <p>
          <a href="<?= PATH."servicio/create/".$servicio->id ?>" class="boton btn btn-primary">Nuevo</a>
          <a href="<?= PATH."servicio/pdf" ?>" class="btn btn-primary boton">Pdf</a>
      </p>
      <table class="tabla table table-striped table-hover">
        <tr>
          <th><a href="<?= PATH."servicio?orderby=nombre" ?>">Nombre</a></th>
          <th><a href="<?= PATH."servicio?orderby=categoria" ?>">Categoría</a></th>
          <th><a href="<?= PATH."servicio?orderby=duracion" ?>">Duración</a></th>
          <th><a href="<?= PATH."servicio?orderby=precio" ?>">Precio</a></th>
          <th></th>
        </tr>

        <?php foreach ($servicios as $key => $servicio) { ?>
          <tr>
          <td><?php echo $servicio->nombre ?></td>
          <td class="mayuscula"><?php echo $servicio->categoria ?></td>
          <td><?php echo $servicio->duracion ?></td>
          <td><?php echo $servicio->precio ?></td>
          <td>
          
            <a href="<?= PATH."servicio/show/".$servicio->id ?>" class="boton btn btn-primary">Ver </a>
            <a href="<?= PATH."servicio/edit/".$servicio->id ?>" class="boton btn btn-primary">Editar </a>
            <a href="<?= PATH."servicio/delete/".$servicio->id ?>" class="boton btn btn-primary">Borrar </a>
          </td>
          </tr>
        <?php } ?>
      </table>

    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>