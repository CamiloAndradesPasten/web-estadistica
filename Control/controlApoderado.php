<?php

require("Clases/apoderado.php");
require("Clases/direccion.php");
require("Datos/apoderadoDao.php");

class controlApoderado{

	//if (isset($__POST["inicioTest"])) {
	//	verDatos();
	//}
	

	function verDatos (){
		$apod = new apoderadoDao();
		$rs = $apod->getApod();
		$num = $apod->getNumApod();

		for ($i=0; $i < $num ; $i++) { 
			// code...
			$apoderado = new apoderado($rs[$i]["id_apo"],$rs[$i]["run_apo"],$rs[$i]["nombres_apo"],$rs[$i]["paterno_apo"],$rs[$i]["materno_apo"],$rs[$i]["sexo_apo"],$rs[$i]["nacionalidad_apo"],$rs[$i]["fecha_nacim_apo"],$rs[$i]["celular_apo"],$rs[$i]["email_apo"],$rs[$i]["activo"]);
			$apoderado->profesion = $rs[$i]["profesion_apo"];
			$apoderado->lugarProfesion = $rs[$i]["lugar_trab_apo"];
			$dir = new direccion();
			$dir->addres = $rs[$i]["direccion_apo"];
			$dir->calle = $rs[$i]["calle"];
			$dir->numero = $rs[$i]["numero"];
			$dir->ciudad = $rs[$i]["ciudad"];
			$apoderado->direc = $dir;

			echo "Nombres:". $apoderado->nombres ."pellido:". $apoderado->apellidoPaterno ."Ciudad:". $apoderado->direc->ciudad ."<br>";


		}
		
		

		
		
	}
}