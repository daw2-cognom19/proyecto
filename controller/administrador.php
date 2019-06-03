<?php
class Administrador{
	private $conn;
	private $table;
	public function __construct(){
		$db = new Conexion();
		$this->conn = $db->getConnection();
		$this->table = "administrador";
	}

	public function getAll(){
		return $this->conn->query("SELECT * from $this->table");
	}
}
?>