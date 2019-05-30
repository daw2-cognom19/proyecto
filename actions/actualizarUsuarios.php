<?php
include ('db.php');
$id = $_POST['id'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$sApellido = $_POST['sApellido'];
$DNI = $_POST['DNI'];
$Telefono = $_POST['Telefono'];
$Piso = $_POST['Piso'];
$Habitacion = $_POST['Habitacion'];
$Administrador = $_POST['Administrador'];

$sql = "UPDATE huespedes SET 
Nombre='$Nombre', 
Apellido = '$Apellido',
sApellido = '$sApellido', 
DNI = '$DNI',  
Telefono = '$Telefono', 
Piso = '$Piso', 
Habitacion = '$Habitacion', 
Administrador = '$Administrador', 
WHERE idHuespedes = '$id'";
mysqli_query($conexion, $sql);
?>