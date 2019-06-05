<?php
class Login {
	private $conn;
	private $table;

	public function __construct(){
		$db = new Conexion();
		$this->conn = $db->getConnection();
		$this->table = "usuarios";
	}
	public function log_into($usuarios, $password){
		$res = $conn->query("SELECT * FROM $this->table WHERE username = " . $username . " AND password = " . $password);
		if ($res->num_rows > 0) {
			if($row = $res->fetch()) {
               $_SESSION['username'] = $row['username'];
               echo 'Exito!';
               exit();
           }
		}
	}
}

?>