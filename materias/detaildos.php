<?php
$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_materia($connect, $id);
$materia = mysqli_fetch_array($resultado);
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
<h1> Detalle de la materia <?php echo $materia ['nombre'] ?><small> <a href ="../materias/index.php"> Regresar </a></small></h1>
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
        <tr>
            <td><?php echo $materia ["id"]; ?> </td>
            <td><?php echo $materia ["nombre"]; ?> </td>
            <td><?php echo $materia ["cuatrimestre"]; ?> </td>
            <td><?php echo $materia ["licenciatura"]; ?> </td>
    </tr>
    </tbody>
</body>
</html>