<?php
require_once("../lib/connect.php");
function get_all_alumnos($connect){
$consulta = "SELECT * FROM alumnos";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
} 
function get_alumno($connect, $id){
$consulta = "SELECT * FROM alumnos WHERE id = $id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
} 


require_once("../lib/connect.php");
function get_all_materias($connect){
$consulta = "SELECT * FROM materias";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
} 
function get_materia($connect, $id){
$consulta = "SELECT * FROM materias WHERE id = $id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
} 


require_once("../lib/connect.php");
function get_all_profesores($connect){
$consulta = "SELECT * FROM profesores";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
} 
function get_profesor($connect, $id){
$consulta = "SELECT * FROM profesores WHERE id = $id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
} 

function insertar_alumnos($nombre, $apellido, $telefono, $correo, $licenciatura, $cuatrimestre, $status){
global $connect;
$consulta = "INSERT INTO alumnos(nombre, apellido, telefono, correo, licenciatura, cuatrimestre, status) 
             VALUES ('$nombre', '$apellido', '$telefono', '$correo', '$licenciatura', '$cuatrimestre', '$status')";
$resultado = mysqli_query($connect, $consulta);
//return $resultado;
}
function update_alumnos($nombre, $apellido, $telefono, $correo, $licenciatura, $cuatrimestre, $status, $id){
global $connect;
$consulta = "UPDATE alumnos SET nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo', cuatrimestre='$cuatrimestre', status='$status' WHERE id=$id";
$resultado = mysqli_query($connect, $consulta);
}

function insertar_materias($nombre, $cuatrimestre, $licenciatura){
global $connect;
$consulta = "INSERT INTO materias(nombre, cuatrimestre, licenciatura) 
            VALUES ('$nombre', '$cuatrimestre', '$licenciatura')";
$resultado = mysqli_query($connect, $consulta);
}
function update_materias($nombre, $cuatrimestre, $licenciatura, $id){
global $connect;
$consulta = "UPDATE materias SET nombre='$nombre', cuatrimestre='$cuatrimestre', licenciatura='$licenciatura' WHERE id=$id";
$resultado = mysqli_query($connect, $consulta);
}

function insertar_profesores($nombre, $apellido, $telefono, $correo, $status){
global $connect;
$consulta = "INSERT INTO profesores(nombre, apellido, telefono, correo, status) 
            VALUES ('$nombre', '$apellido', '$telefono', '$correo', $status)";
$resultado = mysqli_query($connect, $consulta);
}
function update_profesores($nombre, $apellido, $telefono, $correo, $status, $id){
global $connect;
$consulta = "UPDATE profesores SET nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo', status='$status' WHERE id=$id";
$resultado = mysqli_query($connect, $consulta);
}

function eliminar_alumnos($id){
global $connect;
$consulta = "DELETE FROM alumnos  WHERE id=$id";
$resultado = mysqli_query($connect, $consulta);
}
function eliminar_materias($id){
global $connect;
$consulta = "DELETE FROM materias  WHERE id=$id";
$resultado = mysqli_query($connect, $consulta);
}
function eliminar_profesores($id){
global $connect;
$consulta = "DELETE FROM profesores  WHERE id=$id";
$resultado = mysqli_query($connect, $consulta);
}

?>