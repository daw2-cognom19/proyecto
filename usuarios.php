<html>
<head>
	<title>Datos</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
</head>
<style type="text/css">
	table img{
		width: 200px;
	}
</style>
<body>
	<div class="container">
		<div class="table-responsive">          
			<table class="table table-striped table-bordered table-condensed">
				<thead>
					<tr>
						<td></td>
						<td>
							<input type="text" id="username" name="username">
							<div class="u_error"></div>
						</td>
						<td>
							<input type="text" id="password" name="password">
							<div class="p_error"></div>
						</td>
						<td>
							<select id="categoria" name="kategori">
								<option value="-1">==</option>
							</select>
							<div class="c_error"></div>
						</td>
						<td><input type="file" name="product_img"></td>
						<td><input class="btn btn-primary" type="submit" id="save" value="Añadir"></td>
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
		</div>
	</div>
</body>
</html>