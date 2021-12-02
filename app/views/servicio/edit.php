<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

      <h1>Edición de servicio</h1>

      <form method="post" action="<?= PATH . "servicio/update" ?>">
        <input type="hidden" name="id" value="<?php echo $servicio->id ?>">

        <div class="form-group">
          <label>Nombre</label>
          <input type="text" name="name" class="form-control" value="<?php echo $servicio->nombre ?>">
        </div>
        <div class="form-group">
          <label>Categoría</label>
          <select name="category" class="form-control">
            <?php
            foreach ($categorias  as $key => $categoria) {
              $selected = $servicio->categoria_id == $categoria->id ? 'selected' : ''; ?>
              <option value="<? echo $categoria->id ?>" <?= $selected ?>><?php echo $categoria->nombre ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Duración</label>
          <input type="text" name="time" class="form-control" value="<?php echo $servicio->duracion ?>">
        </div>
        <div class="form-group">
          <label>Precio</label>
          <input type="text" name="price" class="form-control" value="<?php echo $servicio->precio ?>">
        </div>
        <button type="submit" class="btn btn-primary boton">Enviar</button>
      </form>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>