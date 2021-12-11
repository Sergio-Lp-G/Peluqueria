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
          <ul> 
            <?php foreach ($servicios as $key => $servicio) { ?>
              <li><?php echo $servicio?></li>
            <?php } ?>

          </ul>
        </li>
      </ul>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>