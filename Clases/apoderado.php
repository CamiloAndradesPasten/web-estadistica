<?php
require ("Clases/persona.php");
class apoderado extends Persona {

	private $profesion;
	private $lugarProfesion;
	private $direc = array();


	

	public function __set($propiedad, $valor){

		if(property_exists($this, $propiedad)){
			$this->$propiedad = $valor;
		}

	}

	public function __get($propiedad){
		if (property_exists($this, $propiedad)){
			return $this->$propiedad;
		}
	}

}