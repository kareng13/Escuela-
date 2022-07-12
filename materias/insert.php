<?php
require_once("../lib/functions.php");

$nombre =$_POST["nombre"];
$cuatrimestre =$_POST["cuatrimestre"];
$licenciatura =$_POST["licenciatura"];

insertar_materias($nombre, $cuatrimestre, $licenciatura);

header("Location: index.php");
?> 