<?php
class Contacto {
	private $conn;
	private $table;

	public function __construct(){
		$db = new Conexion();
		$this->conn = $db->getConnection();
		$this->table = "contacto";
	}
	public function save($name, $email, $textarea){
		$this->conn->query("INSERT into $this->table(name, email, textarea) VALUES('$name', '$email', '$textarea')");
	}
}

?>