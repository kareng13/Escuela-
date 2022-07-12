<?php
require_once("../lib/functions.php");

$nombre =$_POST["nombre"];
$apellido =$_POST["apellido"];
$telefono =$_POST["telefono"];
$correo =$_POST["correo"];
$licenciatura =$_POST["licenciatura"];
$cuatrimestre =$_POST["cuatrimestre"];
$status =$_POST["status"];

insertar_alumnos($nombre, $apellido, $telefono, $correo, $licenciatura, $cuatrimestre, $status);

header("Location: index.php");
?> 