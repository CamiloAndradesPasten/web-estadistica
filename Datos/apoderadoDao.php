<?php 
require("Datos/BD.php");


class ApoderadoDao {

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
	public function siExiste($rut){
try{

			$stmt = $this->conn->prepare("SELECT * FROM apod2 where rut=:rut");
			$stmt->bindparam(":rut",$rut);
			$stmt->execute();
			$rs=$stmt->fetch(PDO::FETCH_ASSOC);

			if($stmt->rowCount() == 1)
			{
				

				return true;
			}
			else
			{
				return false;
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
}

	public function getAllApod(){
		try{

		$stmt = $this->conn->prepare("SELECT * FROM apod2");
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