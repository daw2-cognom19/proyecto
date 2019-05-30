<?php
require_once "../conexion.php";
require_once "../Validador.php";
require_once "../controller/huespedes.php";

$mode = $_REQUEST['mode'];

$objHuesped = new Huespedes();
$objValidar = new Validator();

if($mode == "insert"){
	$nombre = $_REQUEST['nombre'];
	$apellido = $_REQUEST['apellido'];
	$s_apellido = $_REQUEST['s_apellido'];
	$DNI = $_REQUEST['DNI'];
	$telefono = $_REQUEST['telefono'];
	$piso = $_REQUEST['piso'];
	$habitacion = $_REQUEST['habitacion'];
	$administrador = $_REQUEST['administrador'];
	$img = $_REQUEST['img'];

	$sourcePath = $_FILES['img']['tmp_name'];
	$fileName = $_FILES['img']['name'];
	
	if(empty($sourcePath)){
		$fileName = "default.jpg";
	}else{
		$targetPath = "../images/".$fileName; 
		move_uploaded_file($sourcePath,$targetPath) ; 
	} 

	$objHuesped->save($nombre, $apellido, $s_apellido, $DNI, $telefono, $piso, $habitacion, $administrador, $img);
}else if($mode == "load"){
	$i = 1;
	$result = "";
	$products = $objHuesped->getAll();
	while($row = $products->fetch_assoc()){ 
	$result.="<tr>";
		$result.="<td>".$i++."</td>";
		$result.="<td>".$row["nombre"]."</td>";
		$result.="<td>".$row["apellido"]."</td>";
		$result.="<td>".$row["s_apellido"]."</td>";
		$result.="<td>".$row["DNI"]."</td>";
		$result.="<td>".$row["telefono"]."</td>";
		$result.="<td>".$row["piso"]."</td>";
		$result.="<td>".$row["habitacion"]."</td>";
		$result.="<td>".$row["administrador"]."</td>";
		$result.="<td><img src='images/".$row["img"]."'></td>";
		$result.="<td><a class='edit' href='#' data-id='".$row["id"]."'>Editar</a> | <a class='delete' href='#' data-id='".$row["id"]."'>Eliminar</a></td>";
	$result.="</tr>";
	};
	echo $result;
}else if($mode == "update"){
	$nombre = $_REQUEST['nombre'];
	$apellido = $_REQUEST['apellido'];
	$s_apellido = $_REQUEST['s_apellido'];
	$DNI = $_REQUEST['DNI'];
	$telefono = $_REQUEST['telefono'];
	$piso = $_REQUEST['piso'];
	$habitacion = $_REQUEST['habitacion'];
	$administrador = $_REQUEST['administrador'];
	$img = $_REQUEST['img'];
	$id = $_REQUEST['id'];

	$sourcePath = $_FILES['img']['tmp_name'];
	$fileName = $_FILES['img']['name'];

	if(empty($sourcePath)){
		$fileName = "default.jpg";
	}else{
		$targetPath = "../images/".$fileName; 
		move_uploaded_file($sourcePath,$targetPath) ; 
	}

	$objHuesped->update($id, $nombre, $apellido, $s_apellido, $DNI, $telefono, $piso, $habitacion, $administrador, $fileName);
}else if($mode == "delete"){
	$id = $_REQUEST['id'];
	$objHuesped->delete($id);
}
?>