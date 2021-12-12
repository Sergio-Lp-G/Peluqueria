<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle del trabajador <?php echo $trabajador->id ?></h1>
      <ul>
        <li><strong>Nombre: </strong><?php echo $trabajador->name ?></li>
        <li><strong>Apellidos: </strong><?php echo $trabajador->surname ?></li>
        <li><strong>Email: </strong><?php echo $trabajador->email ?></li>
        <li><strong>F. nacimiento: </strong><?php echo $trabajador->birthdate->format('d-m-Y') ?></li>
        <li><strong>Servicios:</strong>
            <p>
                <a href="<?= PATH."trabajadorservicio/create/".$trabajador->id ?>" class="boton btn btn-primary">Nuevo</a>
            </p>
            <table>
            <?php foreach ($servicios as $key => $servicio) { ?>
                <tr>
                    <td><?php echo $servicio->nombre ?></td>
                    <td>
                        <a href="<?= PATH."trabajadorservicio/delete/".$trabajador->id."/".$servicio->id ?>" class="boton btn btn-primary">Borrar </a>
                    </td>
                </tr>
            <?php } ?>
            </table>
        </li>
      </ul>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>