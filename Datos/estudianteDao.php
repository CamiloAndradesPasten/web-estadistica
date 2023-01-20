<?php
require ("Datos/BD.php");
class estudianteDao {
	protected $conn;

	public function __construct(){
		$bd = new connect();
		$db = $bd->dbConnect();
		$this->conn = $db;
	}

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function getAllCol(){
		try{

		$stmt = $this->conn->prepare("SELECT * FROM persona");
		$stmt->execute();
		
		$rs=$stmt->fetchAll(PDO::FETCH_ASSOC);
		
		return $rs;
		
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		$conn=null;
		
	}



	

}