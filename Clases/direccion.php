<?php 
class direccion{
	private $addres;
	private $calle;
	private $numero;
	private $ciudad;

	public function __construct(){

	}


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