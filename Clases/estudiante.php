<?php 

class estudiante extends persona {

	//no existen datos para correo, telefono y sexo...


	private $curso=array();
	private $direccion =array();
	private $postula_est;
	private $fecha_postula_est;
	private $fecha_ult_act_datos;
	private $morosidad;
	private $obs_morosidad;
	private $hijo_funcionario;



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