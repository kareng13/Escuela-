<?php
$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_profesor($connect, $id);
$profesor = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela | Profesores </title>
</head>
<body>
<h1> Detalle del profesor <?php echo $profesor ['apellido']. " " .$profesor ['nombre'] ?><small> <a href ="../profesores/index.php"> Regresar </a></small></h1>
    <table>
        <thead>
            <tr>
                <th> id </th>
                <th> nombre </th>
                <th> apellido </th>
                <th> telefono </th>
                <th> correo </th>
                <th> status </th>
</thead>
</tr>
<tbody>
        <tr>
            <td><?php echo $profesor ["id"]; ?> </td>
            <td><?php echo $profesor ["nombre"]; ?> </td>
            <td><?php echo $profesor ["apellido"]; ?> </td>
            <td><?php echo $profesor ["telefono"]; ?> </td>
            <td><?php echo $profesor ["correo"]; ?> </td>
            <td><?php echo $profesor ["status"]; ?> </td>
    </tr>
    </tbody>
</body>
</html>