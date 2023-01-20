<?php
 class connect {
       

 	private $host = "localhost";
 	private $user = "root";
 	private $password = "";
 	private $BD_name = "amazing";

 	public $conn;

 	public function dbConnect(){
 		$this->conn = null;
 		try{
 			$this->conn = new PDO("mysql:host=".$this->host . ";dbname=". $this->BD_name , $this->user , $this->password);
 			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		} 
 		catch(PDOException $exception)
        {

                echo "Error de conexión: " . $exception->getMessage();

        }

        return $this->conn;
 	}

 }

?>