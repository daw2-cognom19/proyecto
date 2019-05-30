<?php
$servername = "localhost";
$database = "hostal";
$username = "root";
$password = "";

$conexion = mysqli_connect($servername, $username, $password, $database);
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
    mysqli_close($conexion);
}
echo 'ok';
?>