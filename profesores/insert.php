<?php
require_once("../lib/functions.php");

$nombre =$_POST["nombre"];
$apellido =$_POST["apellido"];
$telefono =$_POST["telefono"];
$correo =$_POST["correo"];
$status =$_POST["status"];

insertar_profesores($nombre, $apellido, $telefono, $correo, $status);

header("Location: index.php");
?> 