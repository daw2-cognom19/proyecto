<?php
 include ('conexion.php');
 $id = $_GET['id'];
 mysqli_query($conexion, "DELETE FROM huespedes WHERE id='$id'");
 header("location:../vistas/usuarios.php");
?>