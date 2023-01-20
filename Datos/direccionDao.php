<?php 
require("Datos/BD.php");

class direccionDao {

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

	public function getApodDireccion(){
		try{

		$stmt = $this->conn->prepare("SELECT direccion_apo AS direccion,calle,numero,ciudad FROM apod2 WHERE activo = 1;");
		$stmt->execute();
		$rs=$stmt->fetchAll(PDO::FETCH_ASSOC);

		 return $rs ; //array
		
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

		$conn = null;
	}
	public function getEstDirec(){
		try{

		$stmt = $this->conn->prepare("SELECT dir_est AS direccion,calle,numero,ciudad FROM estudiante WHERE activo = 1");
		$stmt->execute();
		$rs=$stmt->fetchAll(PDO::FETCH_ASSOC);

		 return $rs ; //array
		
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

		$conn = null;
	}
	

	public function getTodoCiuApo(){
		try {
				$stmt = $this->conn->prepare("SELECT ciudad, count(ciudad) AS total FROM apod2 WHERE activo = 1 group by ciudad ORDER BY total DESC ");
					$stmt->execute();
					$rs=$stmt->fetchall(PDO::FETCH_ASSOC);

					return $rs; 
				
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$conn=null;
		}

	Public function getCiudadEst(){
		try {
				$stmt = $this->conn->prepare("SELECT ciudad, count(ciudad) AS total FROM estudiante WHERE activo = 1 group by ciudad ORDER BY total DESC");
					$stmt->execute();
					$rs=$stmt->fetchall(PDO::FETCH_ASSOC);

					return $rs; 
				
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$conn=null;
	}

	Public function getCiudadCol(){
		try {
				$stmt = $this->conn->prepare("SELECT comuna, count(comuna) AS total FROM persona where activo = 1 group by comuna ORDER BY total DESC");
					$stmt->execute();
					$rs=$stmt->fetchall(PDO::FETCH_ASSOC);

					return $rs; 
				
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$conn=null;
	}

	public function getNivelCurso(){

		try {
				$stmt = $this->conn->prepare("SELECT `id_tipo_curso`,`descrip2` FROM `tipo_curso`");
					$stmt->execute();
					$rs=$stmt->fetchall(PDO::FETCH_ASSOC);

					return $rs; 
				
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$conn=null;

	}

	public function getCurso(){

		try {
				$stmt = $this->conn->prepare("SELECT `id_curso`,`nombre_curso` FROM `curso` WHERE activo = 1");
					$stmt->execute();
					$rs=$stmt->fetchall(PDO::FETCH_ASSOC);

					return $rs; 
				
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$conn=null;

	}
	public function filtroEstNivel($nivel){
		

		try {
				$stmt = $this->conn->prepare("SELECT e.nom_est AS nombre, e.pat_est AS apellido ,c.nombre_curso AS curso, e.dir_est AS direccion, e.calle , e.numero, e.ciudad FROM estudiante e, curso c , tipo_curso tc WHERE e.id_curso = c.id_curso AND c.id_tipo_curso = tc.id_tipo_curso AND tc.id_tipo_curso =:nivel AND e.activo = 1");
					$stmt->bindparam(":nivel",$nivel);
					$stmt->execute();
					$rs=$stmt->fetchall(PDO::FETCH_ASSOC);

					return $rs; 
				
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$conn=null;

	}

	public function filtroApoNivel($nivel){

		try {
				$stmt = $this->conn->prepare("SELECT a.nombres_apo AS nombre, a.paterno_apo AS apellido ,c.nombre_curso AS curso, a.direccion_apo AS direccion, a.calle , a.numero, a.ciudad FROM apod2 a, estudiante e, r_apod2_estudiante r , matricula m, curso c , tipo_curso tc WHERE a.id_apo = r.id_apo AND e.id_est = r.id_est AND e.id_est = m.id_estudiante AND e.id_curso = m.id_curso AND m.id_curso = c.id_curso AND c.id_tipo_curso = tc.id_tipo_curso AND tc.id_tipo_curso =:nivel AND r.id_tipo_apoderado = 1 AND a.activo = 1 ORDER BY a.direccion_apo");
					$stmt->bindparam(":nivel",$nivel);
					$stmt->execute();
					$rs=$stmt->fetchall(PDO::FETCH_ASSOC);

					return $rs; 
				
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$conn=null;

	}
	public function filtroApoNivelAll(){

		try {
				$stmt = $this->conn->prepare("SELECT a.nombres_apo AS nombre, a.paterno_apo AS apellido, a.direccion_apo AS direccion, a.calle , a.numero, a.ciudad FROM apod2 a, estudiante e, r_apod2_estudiante r WHERE a.id_apo = r.id_apo AND e.id_est = r.id_est AND r.id_tipo_apoderado = 1  AND a.activo = 1");
					
					$stmt->execute();
					$rs=$stmt->fetchall(PDO::FETCH_ASSOC);

					return $rs; 
				
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$conn=null;

	}

	public function filtroEstCurso($curso){
		try {
				$stmt = $this->conn->prepare("SELECT e.nom_est AS nombre,e.pat_est AS apellido ,c.nombre_curso AS curso, e.dir_est AS direccion ,e.calle,e.numero,e.ciudad FROM estudiante e , curso c WHERE e.id_curso = c.id_curso AND c.id_curso =:curso AND e.activo = 1");
					$stmt->bindparam(":curso",$curso);
					$stmt->execute();
					$rs=$stmt->fetchall(PDO::FETCH_ASSOC);

					return $rs; 
				
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$conn=null;

	}

	public function filtroApoCurso($curso){
		try {
				$stmt = $this->conn->prepare("SELECT a.nombres_apo AS nombre, a.paterno_apo AS apellido,c.nombre_curso AS curso,  a.direccion_apo AS direccion , a.calle , a.numero , a.ciudad FROM apod2 a, estudiante e , curso c, r_apod2_estudiante r WHERE a.id_apo = r.id_apo AND e.id_est = r.id_est AND e.id_curso = c.id_curso AND e.id_curso =:curso AND r.id_tipo_apoderado = 1 AND e.activo = 1 ");
					$stmt->bindparam(":curso",$curso);
					$stmt->execute();
					$rs=$stmt->fetchall(PDO::FETCH_ASSOC);

					return $rs; 
				
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$conn=null;

	}
	
	



	
}


  
	
		




