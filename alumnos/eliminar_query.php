<?php
require_once("../lib/functions.php");

$id =$_GET["id"];

eliminar_alumnos($id);

header("Location: index.php"); 
?> 