<?php
require_once "../conexion.php";
require_once "../controller/usuarios.php";

$mode = $_REQUEST['mode'];

$objUser = new Usuarios();

if($mode=="insert"){
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$category = $_REQUEST['category'];

	$sourcePath = $_FILES['productImg']['tmp_name'];
	$fileName = $_FILES['productImg']['name'];
	
	if(empty($sourcePath)){
		$fileName = "default.jpg";
	}else{
		$targetPath = "../images/".$fileName; 
		move_uploaded_file($sourcePath,$targetPath) ; 
	} 

	$objUser->save($username, $password, $category, $fileName);
}else if($mode=="load"){
	$i=1;
	$result = "";
	$usuarios = $objUser->getAll();
	while($row = $usuarios->fetch_assoc()){ 
	$result.="<tr>";
		$result.="<td>".$i++."</td>";
		$result.="<td>".$row["username"]."</td>";
		$result.="<td>".$row["password"]."</td>";
		$result.="<td>".$row["CategoryName"]."</td>";
		$result.="<td><img src='images/".$row["ProductImg"]."'></td>";
		$result.="<td><a class='edit' href='#' data-id='".$row["id"]."'>Edit</a> | <a class='delete' href='#' data-id='".$row["id"]."'>Delete</a></td>";
	$result.="</tr>";
	};
	echo $result;
}else if($mode=="loadOne"){
	$id = $_REQUEST['id'];
	$result = $objUser->getOne($id)->fetch_assoc();
	echo json_encode($result);
}else if($mode=="update"){
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$category = $_REQUEST['category'];
	$id = $_REQUEST['id'];

	$sourcePath = $_FILES['productImg']['tmp_name'];
	$fileName = $_FILES['productImg']['name'];

	if(empty($sourcePath)){
		$fileName = "default.jpg";
	}else{
		$targetPath = "../images/".$fileName; 
		move_uploaded_file($sourcePath,$targetPath) ; 
	}

	$objUser->update($id, $username, $password, $category, $fileName);
}else if($mode=="delete"){
	$id = $_REQUEST['id'];
	$objUser->delete($id);
}
?>