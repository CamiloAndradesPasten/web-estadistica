<?php 

class colaborador extends persona {

	private $cargo;
	private $tipoFuncionario;
	private $estadoCivir;
	private $nivelEduc;
	private $prevSalud;
	private $apf;
	private $talla;
	private $correoInst;
	private $direccion = array();

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