<?php 
$host = 'localhost';
$database = 'proyecto_grado11';
$user = 'root';
$password = 'ingmorales';

$conexion = mysqli_connect($host, $user, $password, $database);

if (mysqli_errno($conexion)) {
    echo "no se conecto a la base de datos";
}else{
    echo "la conexion fue correcta";
}

$acentos = $conexion->query("SET NAMES 'utf8'");

?>