<?php
class Conexion{
	private $server = "localhost";
	private $username = "root";
	private $pass = "";
	private $db = "hostal";
	private $conn = null;

	public function __construct(){
		$this->conn = new mysqli($this->server, $this->username, $this->pass, $this->db);
	}

	public function conexion(){
		return $this->conn;
	}
}
?>