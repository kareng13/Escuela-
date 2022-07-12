<?php
$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_alumno($connect, $id);
$alumno = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela | Alumnos</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="update_query.php" method="post">
    <p>Nombre:
    <input type="text" name="nombre" id="" value="<?php echo $alumno['nombre']; ?>"></p>
    <input type="hidden" name="id" id="id" value="<?php echo $alumno['id']; ?>"></p>
    <p>Apellido:
    <input type="text" name="apellido" id="" value="<?php echo $alumno['apellido']; ?>">   
    <p>Telefono
    <input type="text" name="telefono" id="" value="<?php echo $alumno['telefono']; ?>"></p>
    <p>Correo:
    <input type="text" name="correo" id="" value="<?php echo $alumno['correo']; ?>"></p>
    <p>Licenciatura:
    <input type="text" name="licenciatura" id="" value="<?php echo $alumno['licenciatura']; ?>"></p> 
    <p>Cuatrimestre:
    <input type="text" name="cuatrimestre" id="" value="<?php echo $alumno['cuatrimestre']; ?>"></p>
    <p>Status:
    <input type="text" name="status" id="" value="<?php echo $alumno['status']; ?>"></p>
    <br/>
    <input type="submit" value="Insertar">

</form>
</body>
</html>