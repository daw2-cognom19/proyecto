<?php
include ('db.php');
// Check connection
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
} 

$user = $_POST['username'];
$pass = md5($_POST['password']);
$sql = "INSERT INTO usuarios (usuario, pass)
VALUES ('$user', '$pass')";

if ($conexion->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>