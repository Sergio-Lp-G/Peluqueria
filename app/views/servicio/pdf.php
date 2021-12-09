<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1{
            color: red;
        }
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
        }
        table {
            width: 80%;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
<h1>Lista de servicios</h1>
<table class="table table-striped table-hover">
<tr>
    <th>Nombre</th>
    <th>Categoría</th>
    <th>Duración</th>
    <th>Precio</th>
</tr>

<?php foreach ($servicios as $key => $servicio) { ?>
    <tr>
    <td><?php echo $servicio->nombre ?></td>
    <td><?php echo $servicio->category->nombre ?></td>
    <td><?php echo $servicio->duracion ?></td>
    <td><?php echo $servicio->precio ?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>
