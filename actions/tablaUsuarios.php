<?php
include ('db.php');

$sql= "SELECT * FROM huespedes ORDER BY idHuespedes"; 

$resultado = mysqli_query($conexion, $sql); 

while ($huespedes = mysqli_fetch_object($resultado)) 
{ 
echo"<tr>
		<td>$huespedes->nombre</td>
		<td>$huespedes->apellido</td>
		<td>$huespedes->s_apellido</td>
		<td>$huespedes->DNI</td>
		<td>$huespedes->telefono</td>
		<td>$huespedes->piso</td>
		<td>$huespedes->habitacion</td>
		<td>$huespedes->administrador</td>

	<td><a href='actions/Editar.php?id=$huespedes->idHuespedes'><button class='btn btn-warning'>Editar</button></a> | 
		<a href='actions/eliminarUsuarios.php?id=$huespedes->idHuespedes'>
			<button id='btnEliminar' class='btn btn-danger'>
	Eliminar</button> </a></td>
</tr>";

}

?>
