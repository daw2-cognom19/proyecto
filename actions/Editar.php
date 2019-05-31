<?php
include ('conexion.php');
$id=$_GET['id'];

$sql= "SELECT * FROM huespedes WHERE id = '$id'";

if($resultado = mysqli_query($conexion,$sql)){

	while ($persona=mysqli_fetch_object($resultado)) {
		$nombre = $persona->nombre;
		$apellido = $persona->apellido;
		$s_apellido = $persona->s_apellido;
		$dni = $persona->dni;
		$telefono = $persona->telefono;
		$piso = $persona->piso;
		$habitacion = $persona->habitacion;
		$idAdministrador = $persona->idAdministrador;
		header("location:../vistas/usuarios.php?nombre=".$nombre."&apellido=".$apellido."&s_apellido=".$s_apellido."&dni=".$dni."&telefono=".$telefono."&piso=".$piso."&habitacion=".$habitacion."&idAdministrador=".$idAdministrador."&id=".$id."");
	}
}
?>