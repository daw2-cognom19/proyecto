<?php
require_once "../conexion.php";
require_once "../controller/administrador.php";
require_once "../controller/usuarios.php";

$mode = $_REQUEST['mode'];

$objCategory = new Administrador();
$result = "";
if($mode == "loadAll"){
	$kategoris = $objCategory->getAll();
	$result.="<option value='-1'>";
	$result.="Seleccione uno";
	$result.="</option>";
	while($row = $kategoris->fetch_assoc()){
		$result.="<option value='".$row["CategoryID"]."'>";
		$result.=$row["CategoryName"];
		$result.="</option>";
	}
	echo $result;
}else if($mode == "loadOne"){
	$objProduct = new Usuarios();
	$product = $objProduct->getOne($_REQUEST['id'])->fetch_assoc();

	$kategoris = $objCategory->getAll();
	$result.="<option value='-1'>";
	$result.="Select One";
	$result.="</option>";
	while($row = $kategoris->fetch_assoc()){
		$result.="<option value='".$row["CategoryID"]."'";
		if($row["CategoryID"]==$product['CategoryID']) $result.= " selected";
		$result.=">";
		$result.=$row["CategoryName"];
		$result.="</option>";
	}
	echo $result;
}
?>