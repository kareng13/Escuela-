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
    <title>Escuela | Materias</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="update_query.php" method="post">
    <p>Nombre:
    <input type="text" name="nombre" id="" value="<?php echo $materia['nombre']; ?>"></p>
    <input type="hidden" name="id" id="id" value="<?php echo $materia['id']; ?>"></p>
    <p>Cuatrimestre:
    <input type="text" name="cuatrimestre" id="" value="<?php echo $materia['cuatrimestre']; ?>"></p>
    <p>Licenciatura:
    <input type="text" name="licenciatura" id="" value="<?php echo $materia['licenciatura']; ?>"></p> 
    <br/>
    <input type="submit" value="Insertar">

</form>
</body>
</html>