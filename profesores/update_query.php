<?php
require_once("../lib/functions.php");

$nombre =$_POST["nombre"];
$apellido =$_POST["apellido"];
$telefono =$_POST["telefono"];
$correo =$_POST["correo"];
$status =$_POST["status"];
$id =$_POST["id"];

update_profesores($nombre, $apellido, $telefono, $correo, $status, $id);

header("Location: index.php"); 
?> 