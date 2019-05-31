<?php
include ('conexion.php');

if (isset($_POST['Nombre'])) {
	$Nombre = $_POST['Nombre'];
}
$Apellido = $_POST['Apellido'];
$s_Apellido = $_POST['s_Apellido'];
$DNI = $_POST['DNI'];
$Telefono = $_POST['Telefono'];
$Piso = $_POST['Piso'];
$Habitacion = $_POST['Habitacion'];
$Administrador = $_POST['Administrador'];

$sql = "INSERT INTO huespedes (nombre, apellido, s_apellido, dni, telefono, piso, habitacion, idAdministrador)
VALUES ('$Nombre', '$Apellido', '$s_Apellido', '$DNI', '$Telefono', '$Piso', '$Habitacion', '$Administrador')";

if ($conexion->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>