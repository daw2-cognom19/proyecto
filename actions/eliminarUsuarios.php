<?php
 include ('db.php');
 $id = $_GET['id'];
 mysqli_query($conexion, "DELETE FROM huespedes WHERE idHuespedes='$id'");
 header("location:../usuarios.php");
?>