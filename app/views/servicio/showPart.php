<main role="main" class="container">
  <div class="starter-template">
    <h3>Servicio</h3>
    <table class="tabla table table-striped table-hover">
      <tr >
          <th><a href="<?= PATH . "servicio?orderby=nombre" ?>">Nombre</a></th>
          <th><a href="<?= PATH . "servicio?orderby=categoria" ?>">Categoría</a></th>
          <th><a href="<?= PATH . "servicio?orderby=duracion" ?>">Duración</a></th>
          <th><a href="<?= PATH . "servicio?orderby=precio" ?>">Precio</a></th>
        </tr>
      </table>
    <div id="homeServicio">
      
      <table class="tabla table table-striped table-hover">
        <?php foreach ($servicios as $key => $servicio) { ?>
          <tr>
            <td><?php echo $servicio->nombre ?></td>
            <td class="mayuscula"><?php echo $servicio->category->nombre ?></td>
            <td><?php echo $servicio->duracion ?></td>
            <td><?php echo $servicio->precio ?></td>
          </tr>
        <?php } ?>
      </table>

    </div>
  </div>

</main>