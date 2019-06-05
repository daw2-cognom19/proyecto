<?php
require_once "../conexion.php";
require_once "../controller/usuarios.php";

$mode = $_REQUEST['mode'];

$objUser = new Usuarios();

if($mode=="insert"){
	$preg_name = "/^[^<,\"@/{}()*$%?=>:|;#]*$/i";
	$preg_pass = "/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/";
	if (preg_match($preg_name, $_REQUEST['username'])) {
	    $username = $_REQUEST['username'];
	}else{
		return false;
	}
	if(preg_match($preg_pass, $_REQUEST['password'])) {
    	$password = $_REQUEST['password'];;
	}else{
		return false;
	}
	if (isset($_REQUEST['category'])) {
		if ($_REQUEST['category'] == 1 || $_REQUEST['category'] == 2) {
			$category = $_REQUEST['category'];
		}else{
			return false;
		}
	}
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
		$result.="<td><a class='edit' href='#' data-id='".$row["id"]."'>Editar</a> | <a class='delete' href='#' data-id='".$row["id"]."'>Eliminar</a></td>";
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