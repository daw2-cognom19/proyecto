<!DOCTYPE html>
<html lang="es">
<head>
  <title>Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    .nover
    {
      display: none;
    }

  </style>

</head>
<body>
<nav class="navbar navbar-inverse bg-primary">

<center><h3><b>Administración de usuarios</b></h3></center>
</nav>

<?php
	if(isset($_GET['nombre'])){

	$id =$_GET['id'];
	$nombre=$_GET['nombre'];
	$apellido=$_GET['apellido'];

	echo "<input type='hidden' id='Hid' value='$id'>";
	echo "<input type='hidden' id='Hnombre' value='$nombre'>";
	echo "<input type='hidden' id='Hapellido' value='$apellido'>";
  echo "<input type='hidden' id='Hsapellido' value='$s_apellido'>";
  echo "<input type='hidden' id='Hdni' value='$dni'>";
  echo "<input type='hidden' id='Htelefono' value='$telefono'>";
  echo "<input type='hidden' id='Hpiso' value='$piso'>";
  echo "<input type='hidden' id='Hhabitacion' value='$habitacion'>";
  echo "<input type='hidden' id='Hadministrador' value='$administrador'>";
	?>
<div class="container">
  <h2>Usuarios</h2>
<button class="btn btn-primary" data-toggle="modal" data-target="#RegistrarClienteModal	" id="Agregar">AGREGAR</button> 
 <table class="table">
    <thead class="active">
      <tr class="active">
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Segundo apellido</th>
        <th>DNI</th>
        <th>Teléfono</th>
        <th>Piso</th>
        <th>Habitacion</th>
        <th>Administrador</th>
      </tr>
    </thead>
    <tbody class="Contenido">
     <?php
     	include 'actions/tablaUsuarios.php';
     ?>

    </tbody>
  </table>
</div>

<?php
	}


else
{

?>
<div class="container">
<button class="btn btn-primary" data-toggle="modal" data-target="#RegistrarClienteModal	" id="Agregar">Agregar</button> 
 <table class="table">
    <thead class="active">
      <tr class="active">
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Segundo apellido</th>
        <th>DNI</th>
        <th>Teléfono</th>
        <th>Piso</th>
        <th>Habitacion</th>
        <th>Administrador</th>
      </tr>
    </thead>
    <tbody class="Contenido">

     <?php
     	include 'actions/tablaUsuarios.php';
     ?>

    </tbody>
  </table>
</div>


</body>
</html>
<?php


 } 

 ?>

<script type="text/javascript" src="js/crud.js"> </script>
</html>

<div id="RegistrarClienteModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Agregar usuario</h4>
 </div>
 <div class="modal-body">

		 <div class="form-group">
			   <label class="control-label" for="inputPatient">Nombre</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" type="text" value="" required>
			  </div>
     	 </div>

          <div class="form-group">
	          <label class="control-label" for="inputPatient">Apellido</label>
	          <div class="field desc">
	       		  <input class="form-control" id="Apellido" name="Apellido" placeholder="Apellido" type="text" value="" required>
	         </div>
         </div>
          <div class="form-group">
            <label class="control-label" for="inputPatient">Segundo apellido</label>
            <div class="field desc">
              <input class="form-control" id="sApellido" name="sApellido" placeholder="Segundo pellido" type="text" value="" required>
           </div>
         </div>
          <div class="form-group">
            <label class="control-label" for="inputPatient">DNI</label>
            <div class="field desc">
              <input class="form-control" id="DNI" name="DNI" placeholder="DNI" type="text" value="" required>
           </div>
         </div>
          <div class="form-group">
            <label class="control-label" for="inputPatient">Telefono</label>
            <div class="field desc">
              <input class="form-control" id="Telefono" name="Telefono" placeholder="Telefono" type="number" value="" required>
           </div>
         </div>
          <div class="form-group">
            <label class="control-label" for="inputPatient">Piso</label>
            <div class="field desc">
              <input class="form-control" id="Piso" name="Piso" placeholder="Piso" type="number" value="" required>
           </div>
         </div>
          <div class="form-group">
            <label class="control-label" for="inputPatient">Habitacion</label>
            <div class="field desc">
              <input class="form-control" id="Habitacion" name="Habitacion" placeholder="Habitacion" type="number" value="" required>
           </div>
         </div>
          <div class="form-group">
            <label class="control-label" for="inputPatient">Administrador</label>
            <div class="field desc">
              <input class="form-control" id="Administrador" name="Administrador" placeholder="Administrador" type="text" value="" required>
           </div>
         </div>

         

		 <div class="control-group">

		 <div class="controls controls-row" id="when" style="margin-top:5px;">
		 </div>
		 </div>
		 
 </div>
 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
 <button type="submit" class="btn btn-primary Registrar"  data-dismiss="modal" id="Registrar">Registrar</button>
  <button type="submit" class="btn btn-success Actualizar nover"  data-dismiss="modal" id="Actualizar ">Actualizar</button>
 </div>
 </div>

 </div>
</div>
