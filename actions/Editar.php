<?php
include ('db.php');
$id=$_GET['id'];

$sql= "SELECT * FROM huespedes WHERE idHuespedes = '$id'";

if($resultado = mysqli_query($conexion,$sql)){

	while ($huespedes=mysqli_fetch_object($resultado)) {

		$id 	  = $huespedes->idHuespedes;
		$nombre = $huespedes->nombre;
		$apellido = $huespedes->apellido;
		$sApellido = $huespedes->s_apellido;
		$DNI = $huespedes->DNI;
		$telefono = $huespedes->telefono;
		$piso = $huespedes->piso;
		$habitacion = $huespedes->habitacion;
		$admin = $huespedes->administrador;

		header("location:../usuarios.php?nombre=".$nombre."&apellido=".$apellido."&sApellido=".$sApellido."&DNI=".$DNI."&telefono=".$telefono."&piso=".$piso."&habitacion=".$habitacion."&admin=".$admin."&id=".$id."");
	}
}
?>