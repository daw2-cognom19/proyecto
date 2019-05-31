<?php
$servername = "localhost";
$database = "crud";
$username = "root";
$password = "";
// Create connection
$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
?>