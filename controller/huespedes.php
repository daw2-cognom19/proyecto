<?php
class Huespedes {
	private $conn;
	private $table;

	public function __construct(){
		$db = new conexion();
		$this->conn = $db->conexion();
		$this->table = "huespedes";
	}

	public function getAll(){
		return $this->conn->query("SELECT * from $this->table");
	}
	
	public function save($nombre, $apellido, $s_apellido, $DNI, $telefono, $piso, $habitacion, $administrador) {
		$this->conn->query("INSERT into $this->table(nombre, apellido, s_apellido, DNI, telefono, piso, habitacion, administrador, img) VALUES('$nombre', '$apellido', '$s_apellido', '$DNI', '$telefono', '$piso', '$habitacion', '$administrador')");
	}

	public function update($nombre, $apellido, $s_apellido, $DNI, $telefono, $piso, $habitacion, $administrador) {
		$this->conn->query("UPDATE $this->table SET nombre='$nombre', apellido='$apellido', s_apellido='$s_apellido', DNI='$DNI', telefono='$telefono', piso='$piso', habitacion='$habitacion', administrador='$administrador' WHERE id='$id'");
	}

	public function delete($id){
		$this->conn->query("DELETE from $this->table WHERE id = '$id'");
	}
}
?>