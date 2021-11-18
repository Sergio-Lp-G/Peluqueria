<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de servicios</h1>
      <p><a href="<?= PATH."servicio/create/".$servicio->id ?>" class="boton btn btn-primary">Nuevo</a></p>
      <table class="tabla table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Email</th>
          <th>F. nacimiento</th>
          <th></th>
        </tr>

        <?php foreach ($servicios as $key => $servicio) { ?>
          <tr>
          <td><?php echo $servicio->name ?></td>
          <td><?php echo $servicio->surname ?></td>
          <td><?php echo $servicio->email ?></td>
          <td><?php echo $servicio->birthdate ? $servicio->birthdate->format('d-m-Y') : 'nonato' ?></td>
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