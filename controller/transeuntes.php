<?php
class Transeuntes {
	private $conn;
	private $table;

	public function __construct(){
		$db = new Conexion();
		$this->conn = $db->getConnection();
		$this->table = "transeuntes";
	}
	public function save($agent, $ip, $tracking_page_name, $host_name){
		$this->conn->query("INSERT into $this->table(agent, ip, tracking_page_name, host_name) VALUES('$agent','$ip','$tracking_page_name','$host_name')");
	}
}
?>