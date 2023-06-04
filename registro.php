<?php 
$documento = $_POST['documento'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$nacimiento = $_POST['nacimiento'];
$genero = $_POST['genero'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$profesion = $_POST['profesion'];
$actividad = $_POST['actividad'];
$estado = $_POST['estado'];

include "conexion.php";

$insertar = "INSERT INTO personas (documento, nombres, apellidos, nacimiento, sexo, telefono, correo, profesion, actividad, estado) 
VALUES ('$documento', '$nombres', '$apellidos', '$nacimiento', '$genero', '$telefono', '$correo', '$profesion', '$actividad', '$estado')";
if ($conexion->query($insertar) == true) {
    header('location: ver-datos.php');
}else{
    header('location: index.php');
}
?>