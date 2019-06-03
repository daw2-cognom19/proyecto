<?php
class Usuarios{
	private $conn;
	private $table;

	public function __construct(){
		$db = new Conexion();
		$this->conn = $db->getConnection();
		$this->table = "usuarios";
	}
	public function getAll(){
		return $this->conn->query("SELECT * from $this->table JOIN administrador on $this->table.CategoryID=administrador.CategoryID");
	}
	
	public function save($username, $password, $admin, $productImg){
		echo $name;
		$this->conn->query("INSERT into $this->table(username, password, CategoryID, productImg) VALUES('$username', '$password', '$admin', '$productImg')");
	}

	public function getOne($id){
		return $this->conn->query("SELECT * from $this->table JOIN administrador on $this->table.CategoryID=administrador.CategoryID WHERE $this->table.id='$id'");
	}
	
	public function update($username, $password, $admin, $productImg){
		$this->conn->query("UPDATE $this->table SET username='$username', password='$password', CategoryID='$admin', productImg='$productImg' WHERE id='$id'");
	}

	public function delete($id){
		$this->conn->query("DELETE from $this->table WHERE id = '$id'");
	}
}
?>