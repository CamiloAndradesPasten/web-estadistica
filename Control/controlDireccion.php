<?php 
require ("Datos/direccionDao.php");
require ("Clases/direccion.php");

class controlDireccion {

	public function verDatosApodMap(){

		$direc = new direccionDao();
		$rs = $direc->getApodDireccionMap();
		$num = $direc->getNumDir();
		for ($i=0; $i < $num ; $i++){
			$direcApo = new direccion();
			$direcApo->addres = $rs[$i]["direccion_apo"];
			$direcApo->calle = $rs[$i]["calle"];
			$direcApo->numero = $rs[$i]["numero"];
			$direcApo->ciudad = $rs[$i]["ciudad"];

			echo "direccion:".$direcApo->addres."calle: ".$direcApo->calle." numero: ".$direcApo->numero." ciudad: ".$direcApo->ciudad."<br>";


		}


	}

	public function verGraficoCoquimbo(){


        $direc = new direccionDao();
        $rs = $direc->getCiudades();
        foreach($rs as $x => $x_value) {
  		echo "'" . $x . "'," . $x_value;
  		
        }
      
	}
	public function verGraficoLaSerena(){


        $direc = new direccionDao();
        $rs = $direc->getCiuLaSerena();
        foreach($rs as $x => $x_value) {
  		echo "'" . $x . "'," . $x_value;
  		
        }
      
	}
	public function getTodo(){

		$direc = new direccionDao();
		$rs=$direc->getTodoCiu();
		

		
		return $rs;
		
		}
		

		
		

		
	}


