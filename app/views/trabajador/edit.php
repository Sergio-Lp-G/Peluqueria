<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Edición de usuario</h1>

    <form method="post" action="<?= PATH."trabajador/update"?>">
        <input type="hidden" name="id"
        value="<?php echo $trabajador->id ?>">

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control"
        value="<?php echo $trabajador->name ?>"
        >
    </div>
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="surname" class="form-control"
        value="<?php echo $trabajador->surname ?>"
        >
    </div>
    <div class="form-group">
        <label>F. cumpleaños</label>
        <input type="text" name="birthdate" class="form-control"
        value="<?php echo $trabajador->birthdate->format('Y-m-d') ?>"
        >
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control"
        value="<?php echo $trabajador->email ?>"
        >
    </div>
    <button type="submit" class="btn btn-primary boton">Enviar</button>
    </form>
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>