<?php
include '../conexion.php';  
include '../controller/login.php';  
$objLogin = new Login();
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
}
$objLogin->try_login($username, $password);
?>