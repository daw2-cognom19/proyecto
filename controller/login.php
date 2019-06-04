<?php
class Login{
	private $conn;
	private $table;

	public function __construct(){
		$db = new Conexion();
		$this->conn = $db->getConnection();
		$this->table = "usuarios";
	}

	public function try_login($username, $password){
		return $this->conn->query("SELECT * FROM $this->table WHERE username = " . $this->$username. " and password = " . $this->$password);
	}
}
?>