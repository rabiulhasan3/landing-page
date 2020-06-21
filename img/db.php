<?php
class Db{
	private $conn;
	public function __construct($host,$user,$pass,$db){
		$this->conn=new mysqli($host,$user,$pass,$db);
		if(!$this->conn){
			die("connection FAil".$this->conn->connect_error);
		}
	}

	public function getAll($table,$cols){
		$sql="SELECT $cols FROM $table";
		/*echo $sql;*/
		$result=$this->conn->query($sql);
		if($result->num_rows>0){
			return $result->fetch_all(MYSQLI_ASSOC);
		}
		else{
			return "Naikka";
		}
	}

	public function getById($table,$cols,$condition){
		$sql="SELECT $cols FROM $table WHERE $condition";
		//echo $sql;
		$result=$this->conn->query($sql);
		if($result->num_rows>0){
			return $result->fetch_assoc();
		}
		else{
			return "Naikka";
		}
	}

	public function getAllByIds($table,$cols,$condition){
		$sql="SELECT $cols FROM $table WHERE $condition";
		//echo $sql;
		$result=$this->conn->query($sql);
		if($result->num_rows>0){
			return $result->fetch_all(MYSQLI_ASSOC);
		}
		else{
			return "Naikka";
		}
	}

	public function Insert($table,$cols){
		$sql="INSERT INTO $table SET $cols";
		$result=$this->conn->query($sql);
		if($this->conn->affected_rows>0){
			return true;
		}
		return false;
	}
}

$connect=new Db("localhost","root","","fci");
/*echo "<pre>";
//print_r($connect->getAll("students","name,mobile"));
print_r($connect->getAllByIds("students","*","id in(1,4)"));
echo "</pre>";*/
?>