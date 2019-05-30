<html>
<head>
	<title>Datos</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>
<style type="text/css">
	table img{
		width: 200px;
	}
</style>
<body>
	<p>
		<button name="agregar">Agregar</button>
	</p>
	<p id="loading" style="display:none">
	Cargando..............
	</p>
	<table border="1" cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<td></td>
				<td><input type="text" name="nombre"></td>
				<td><input type="text" name="apellido"></td>
				<td><input type="text" name="s_apellido"></td>
				<td><input type="text" name="DNI"></td>
				<td><input type="number" name="telefono"></td>
				<td><input type="number" name="piso"></td>
				<td><input type="number" name="habitacion"></td>
				<td><input type="number" name="administrador"></td>
				<td><input type="file" name="img"></td>
				<td><input type="submit" id="save" value="Agregar"></td>
			</tr>
			<tr>
				<th></th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Segundo apellido</th>
				<th>DNI</th>
				<th>Telefono</th>
				<th>Piso</th>
				<th>Habitacion</th>
				<th>Administrador</th>
				<th>Imagen</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
	
</body>
</html>