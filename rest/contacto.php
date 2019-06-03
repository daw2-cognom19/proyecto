<?php
require_once "../conexion.php";
require_once "../controller/contacto.php";
$objContacto = new Contacto();
if (isset($_POST['name'])) {
	$name = $_POST['name'];
}
if (isset($_POST['email'])) {
	$email = $_POST['email'];
}
if (isset($_POST['textarea'])) {
	$textarea = $_POST['textarea'];
}
$objContacto->save($name, $email, $textarea);
?>