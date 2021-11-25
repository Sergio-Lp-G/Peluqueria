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
    
<h1>Lista de trabajadores</h1>
<table class="table table-striped table-hover">
<tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Email</th>
    <th>F. nacimiento</th>
</tr>

<?php foreach ($trabajadores as $key => $trabajador) { ?>
    <tr>
    <td><?php echo $trabajador->name ?></td>
    <td><?php echo $trabajador->surname ?></td>
    <td><?php echo $trabajador->email ?></td>
    <td><?php echo $trabajador->birthdate ? $trabajador->birthdate->format('d-m-Y') : 'nonato' ?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>
