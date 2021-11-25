<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de trabajadores</h1>
      <p>
        <a href="<?= PATH."trabajador/create/".$trabajador->id ?>" class="boton btn btn-primary">Nuevo</a>
        <a href="<?= PATH."trabajador/pdf" ?>" class="btn btn-primary boton">Pdf</a>
      </p>

        <table class="tabla table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Email</th>
          <th>F. nacimiento</th>
          <th></th>
        </tr>

        <?php foreach ($trabajadores as $key => $trabajador) { ?>
          <tr>
          <td><?php echo $trabajador->name ?></td>
          <td><?php echo $trabajador->surname ?></td>
          <td><?php echo $trabajador->email ?></td>
          <td><?php echo $trabajador->birthdate ? $trabajador->birthdate->format('d-m-Y') : 'nonato' ?></td>
          <td>
          
            <a href="<?= PATH."trabajador/show/".$trabajador->id ?>" class="boton btn btn-primary">Ver </a>
            <a href="<?= PATH."trabajador/edit/".$trabajador->id ?>" class="boton btn btn-primary">Editar </a>
            <a href="<?= PATH."trabajador/delete/".$trabajador->id ?>" class="boton btn btn-primary">Borrar </a>
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