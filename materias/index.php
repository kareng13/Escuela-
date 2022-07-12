<?php
require_once("../lib/functions.php");
$materias = get_all_materias($connect)
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela | Materias </title>
</head>
<body>
<h1> Materias <a href ="formulario.php"> Agregar materia </a></small></h1>
    <table>
        <thead>
            <tr>
                <th> id </th>
                <th> nombre </th>
                <th> cuatrimestre </th>
                <th> licenciatura </th>
</thead>
</tr>
<tbody>
    <?php
    while ($fila = mysqli_fetch_array($materias)){
        ?>
        <tr>
            <td><?php echo $fila ["id"]; ?> </td>
            <td><?php echo $fila ["nombre"]; ?> </td>
            <td><?php echo $fila ["cuatrimestre"]; ?> </td>
            <td><?php echo $fila ["licenciatura"]; ?> </td>
            <td><a href = "detaildos.php?id=<?php echo $fila ['id']; ?>"> Detalle </a></td>
            <td><a href = "formulario_update.php?id=<?php echo $fila ['id']; ?>"> Editar </a></td>
            <td><a href = "eliminar_query.php?id=<?php echo $fila ['id']; ?>"> Eliminar </a></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</body>
</html>