<?php
include ('conexion.php');
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$s_apellido = $_GET['s_apellido'];
$dni = $_GET['dni'];
$telefono = $_GET['telefono'];
$piso = $_GET['piso'];
$habitacion = $_GET['habitacion'];
$idAdministrador = $_GET['idAdministrador'];

$sql = "UPDATE huespedes SET nombre='$nombre', 
apellido = '$apellido', 
s_apellido = '$s_apellido',
dni = '$dni',
telefono = '$telefono',
piso = '$piso',
habitacion = '$habitacion',
idAdministrador = '$idAdministrador'
WHERE id = '$id'";
mysqli_query($conexion, $sql);
?>