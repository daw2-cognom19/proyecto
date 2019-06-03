<html>
<head>
	<title>Datos</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<meta charset="utf-8">
</head>
<style type="text/css">
	table img{
		width: 200px;
	}
</style>
<body>
	<p>
		<button id="add" name="tambah">Añadir</button>
	</p>
	<p id="loading" style="display:none">
	Loading..............
	</p>
	
	<table border="1" cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<td></td>
				<td><input type="text" id="username" name="username"></td>
				<td><input type="text" id="password" name="password"></td>
				<td>
					<select name="kategori">
						<option value="-1">==</option>
					</select>
				</td>
				<td><input type="file" name="product_img"></td>
				<td><input type="submit" id="save" value="Añadir"></td>
			</tr>
			<tr>
				<th>Id</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Administrador</th>
				<th>Foto</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
	
</body>
</html>