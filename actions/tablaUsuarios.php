<?php
include ('conexion.php');

$sql= "SELECT * FROM huespedes ORDER BY id"; 

$resultado = mysqli_query($conexion, $sql); 

while ($persona = mysqli_fetch_object($resultado)) 
{ 
echo"<tr>
	<td>$persona->nombre</td>
	<td>$persona->apellido</td>
	<td>$persona->s_apellido</td>
	<td>$persona->dni</td>
	<td>$persona->telefono</td>
	<td>$persona->piso</td>
	<td>$persona->habitacion</td>
	<td>$persona->idAdministrador</td>
	<td><a href='../actions/Editar.php?id=$persona->id'><button class='btn btn-warning'>Editar</button></a> | 
		<a href='../actions/eliminarUsuarios.php?id=$persona->id'>
			<button id='btnEliminar' class='btn btn-danger'>
	Eliminar</button> </a></td>
</tr>";

}

?>
