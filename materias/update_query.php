<?php
require_once("../lib/functions.php");

$nombre =$_POST["nombre"];
$cuatrimestre =$_POST["cuatrimestre"];
$licenciatura =$_POST["licenciatura"];
$id =$_POST["id"];

update_materias($nombre, $cuatrimestre, $licenciatura, $id);

header("Location: index.php"); 
?> 