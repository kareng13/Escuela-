<?php
require_once("../lib/functions.php");

$id =$_GET["id"];

eliminar_materias($id);

header("Location: index.php"); 
?> 