<?php
require_once "../conexion.php";
require_once "../controller/login.php";
$objLogin = new Login();
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
}
$objLogin->log_into($username, $password);
?>