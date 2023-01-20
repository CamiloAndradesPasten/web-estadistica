<?php
abstract class Persona {
	public $id;
	public $run;
	public $nombres;
	public $apellidoPaterno;
	public $apellidoMaterno;
	public $sexo;
	public $nacionalidad;
	public $fechaNacimiento;
	public $telefono;
	public $correo;
	public $activo;

	public function __construct($id,$run,$nombres,$apellidoPaterno,$apellidoMaterno,$sexo,$nacionalidad,$fechaNacimiento,$telefono,$correo,$activo){
		$this->id = $id;
		$this->nombres = $nombres;
		$this->apellidoPaterno = $apellidoPaterno;
		$this->apellidoMaterno = $apellidoMaterno;
		$this->sexo = $sexo;
		$this->nacionalidad = $nacionalidad;
		$this->fechaNacimiento = $fechaNacimiento;
		$this->telefono = $telefono;
		$this->correo = $correo;
		$this->activo = $activo;
	}

}

