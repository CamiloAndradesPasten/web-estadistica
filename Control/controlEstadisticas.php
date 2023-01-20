<?php 
require ("Datos/direccionDao.php");
require ("Clases/direccion.php");


class controlEstadisticas {


	public function ciudadApo(){

		//FALTA LIMPIEZA DE DATOS

		$direc = new direccionDao();
		$rs=$direc->getTodoCiuApo();
		$count = count($rs);
		
		/*for ($i=0 ; $i < $count ; $i++ ) {


			
			//arreglos para item COQUIMBO

			if ($rs[$i]["ciudad"]=="COQUIMBO " ){

				$keyCoquimbo=$i;


				$rs[$i]["ciudad"] = "COQUIMBO";
			}
			

			if ($rs[$i]["ciudad"]==" COQUIMBO" OR $rs[$i]["ciudad"]=="COQUUIMBO" OR $rs[$i]["ciudad"]=="coquuimbo" OR $rs[$i]["ciudad"]=="COQUIMBIO" OR $rs[$i]["ciudad"]=="coquimbio" OR $rs[$i]["ciudad"]=="Coquimbio" OR $rs[$i]["ciudad"]=="COQUIMBI" OR $rs[$i]["ciudad"]=="coquimbi" OR $rs[$i]["ciudad"]=="COQUIMBP" OR $rs[$i]["ciudad"]=="COQUIMBOI" ){
				
				$rs[$keyCoquimbo]["total"] = $rs[$keyCoquimbo]["total"] + $rs[$i]["total"];

				unset($rs[$i]);
				continue;
			}

			//arreglos para item LA SERENA 

			if ($rs[$i]["ciudad"]=="LA SERENA" ){
				$keyLS=$i;
				
			}
			
			if ($rs[$i]["ciudad"]=="LS" OR $rs[$i]["ciudad"]=="ls" OR $rs[$i]["ciudad"]=="SERENA" OR $rs[$i]["ciudad"]=="Serena" OR $rs[$i]["ciudad"]=="serena" OR $rs[$i]["ciudad"]=="LASERENA" OR $rs[$i]["ciudad"]=="laserena" OR $rs[$i]["ciudad"]=="LaSerena" OR $rs[$i]["ciudad"]=="LA SERENA " OR $rs[$i]["ciudad"]==" LA SERENA" ){
				
				$rs[$keyLS]["total"] = $rs[$keyLS]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			//arreglos para Vicuña

			if ($rs[$i]["ciudad"]=="VICU&Ntilde;A " ){

				$keyVicuña=$i;

				$rs[$i]["ciudad"] = "VICUÑA";	
				continue;
			}

			if ($rs[$i]["ciudad"]=="VICUNA" OR $rs[$i]["ciudad"]=="VICUNA" OR $rs[$i]["ciudad"]=="VICUNA " OR $rs[$i]["ciudad"]==" VICUNA" OR $rs[$i]["ciudad"]=="BICUNA" OR $rs[$i]["ciudad"]==" BICUNA" OR $rs[$i]["ciudad"]=="BICUNA " ) {

				$rs[$keyVicuña]["total"] = $rs[$keyVicuña]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
			}

			//arreglos para GUANAQUEROS

			if ($rs[$i]["ciudad"]=="GUANAQUEROS" ){
				$keyGuanaqueros=$i;
				
			}

			if ($rs[$i]["ciudad"]=="GUNAQUEROS" OR $rs[$i]["ciudad"]=="GUANAQUERO" OR $rs[$i]["ciudad"]=="GUANNAQUEROS" OR $rs[$i]["ciudad"]=="GUASNAQUERO" OR $rs[$i]["ciudad"]=="GUANAQUEROS "  ){
				
				$rs[$keyGuanaqueros]["total"] = $rs[$keyGuanaqueros]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			//arreglos para COPIAPO

			if ($rs[$i]["ciudad"]=="COPIAPO" ){
				$keyCopiapo=$i;
				
			}

			  

			if ($rs[$i]["ciudad"]=="COPIAP&Oacute;" OR $rs[$i]["ciudad"]=="COPIAP&Oacute; " OR $rs[$i]["ciudad"]==" COPIAP&Oacute;" OR $rs[$i]["ciudad"]=="Copiap&oacute;" OR $rs[$i]["ciudad"]==" Copiap&oacute; " OR $rs[$i]["ciudad"]=="copiap&oacute;" OR $rs[$i]["ciudad"]==" copiap&oacute;"
				OR $rs[$i]["ciudad"]=="copiap&oacute; "  ){
				
				$rs[$$keyCopiapo]["total"] = $rs[$$keyCopiapo]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			//arreglos para digitacion nula y/o random

			if ($rs[$i]["ciudad"]=="" ){

					$keyMalos=$i; 

				$rs[$i]["ciudad"] = "DESCONOCIDO";
			}

			if ($rs[$i]["ciudad"]=="C4" OR $rs[$i]["ciudad"]==" " ){

				$rs[$keyMalos]["total"] = $rs[$keyMalos]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			
			
					}*/
		

		
		return $rs;
		
		}

	
		public function ciudadEst(){

		$direc = new direccionDao();
		$rs=$direc->getCiudadEst();
		$count = count($rs);
		
		/*for ($i=0 ; $i < $count ; $i++ ) {


			
			//arreglos para item COQUIMBO

			if ($rs[$i]["ciudad"]=="COQUIMBO " ){

				$keyCoquimbo=$i;


				$rs[$i]["ciudad"] = "COQUIMBO";
			}
			

			if ($rs[$i]["ciudad"]==" COQUIMBO" OR $rs[$i]["ciudad"]=="COQUUIMBO" OR $rs[$i]["ciudad"]=="coquuimbo" OR $rs[$i]["ciudad"]=="COQUIMBIO" OR $rs[$i]["ciudad"]=="coquimbio" OR $rs[$i]["ciudad"]=="Coquimbio" OR $rs[$i]["ciudad"]=="COQUIMBI" OR $rs[$i]["ciudad"]=="coquimbi" OR $rs[$i]["ciudad"]=="COQUIMBP" OR $rs[$i]["ciudad"]=="COQUIMBOI" ){
				
				$rs[$keyCoquimbo]["total"] = $rs[$keyCoquimbo]["total"] + $rs[$i]["total"];

				unset($rs[$i]);
				continue;
			}

			//arreglos para item LA SERENA 

			if ($rs[$i]["ciudad"]=="LA SERENA" ){
				$keyLS=$i;
				
			}
			
			if ($rs[$i]["ciudad"]=="LS" OR $rs[$i]["ciudad"]=="ls" OR $rs[$i]["ciudad"]=="SERENA" OR $rs[$i]["ciudad"]=="Serena" OR $rs[$i]["ciudad"]=="serena" OR $rs[$i]["ciudad"]=="LASERENA" OR $rs[$i]["ciudad"]=="laserena" OR $rs[$i]["ciudad"]=="LaSerena" OR $rs[$i]["ciudad"]=="LA SERENA " OR $rs[$i]["ciudad"]==" LA SERENA" ){
				
				$rs[$keyLS]["total"] = $rs[$keyLS]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			//arreglos para Vicuña

			if ($rs[$i]["ciudad"]=="VICU&Ntilde;A " ){

				$keyVicuña=$i;

				$rs[$i]["ciudad"] = "VICUÑA";	
				continue;
			}

			if ($rs[$i]["ciudad"]=="VICUNA" OR $rs[$i]["ciudad"]=="VICUNA" OR $rs[$i]["ciudad"]=="VICUNA " OR $rs[$i]["ciudad"]==" VICUNA" OR $rs[$i]["ciudad"]=="BICUNA" OR $rs[$i]["ciudad"]==" BICUNA" OR $rs[$i]["ciudad"]=="BICUNA " ) {

				$rs[$keyVicuña]["total"] = $rs[$keyVicuña]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
			}

			//arreglos para GUANAQUEROS

			if ($rs[$i]["ciudad"]=="GUANAQUEROS" ){
				$keyGuanaqueros=$i;
				
			}

			if ($rs[$i]["ciudad"]=="GUNAQUEROS" OR $rs[$i]["ciudad"]=="GUANAQUERO" OR $rs[$i]["ciudad"]=="GUANNAQUEROS" OR $rs[$i]["ciudad"]=="GUASNAQUERO" OR $rs[$i]["ciudad"]=="GUANAQUEROS "  ){
				
				$rs[$keyGuanaqueros]["total"] = $rs[$keyGuanaqueros]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			//arreglos para COPIAPO

			if ($rs[$i]["ciudad"]=="COPIAPO" ){
				$keyCopiapo=$i;
				
			}

			  

			if ($rs[$i]["ciudad"]=="COPIAP&Oacute;" OR $rs[$i]["ciudad"]=="COPIAP&Oacute; " OR $rs[$i]["ciudad"]==" COPIAP&Oacute;" OR $rs[$i]["ciudad"]=="Copiap&oacute;" OR $rs[$i]["ciudad"]==" Copiap&oacute; " OR $rs[$i]["ciudad"]=="copiap&oacute;" OR $rs[$i]["ciudad"]==" copiap&oacute;"
				OR $rs[$i]["ciudad"]=="copiap&oacute; "  ){
				
				$rs[$$keyCopiapo]["total"] = $rs[$$keyCopiapo]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			//arreglos para digitacion nula y/o random

			if ($rs[$i]["ciudad"]=="" ){

					$keyMalos=$i; 

				$rs[$i]["ciudad"] = "DESCONOCIDO";
			}

			if ($rs[$i]["ciudad"]=="C4" OR $rs[$i]["ciudad"]==" " ){

				$rs[$keyMalos]["total"] = $rs[$keyMalos]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			
			
					}*/
return $rs;
		

		
		
		}
		public function ciudadCol(){

		$direc = new direccionDao();
		$rs=$direc->getCiudadCol();
		$count = count($rs);
		/*for ($i=0 ; $i < $count ; $i++ ){

			// ARREGLO DATOS DESCONOCIDO
			
			if ($rs[$i]["comuna"]=="") {
				$keyMalIngresado = $i;
				$rs[$i]["comuna"]= "DESCONOCIDO";
			}

			if ($rs[$i]["comuna"]=="AAA") {
				$rs[$keyMalIngresado]["total"] = $rs[$keyMalIngresado]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			//ARREGLO LA SERENA

			if ($rs[$i]["comuna"]=="LA SERENA" ){
				$keyLaS=$i;
				
			}
			
			if ($rs[$i]["comuna"]=="LS" OR $rs[$i]["comuna"]=="ls" OR $rs[$i]["comuna"]=="SERENA" OR $rs[$i]["comuna"]=="Serena" OR $rs[$i]["comuna"]=="serena" OR $rs[$i]["comuna"]=="LASERENA" OR $rs[$i]["comuna"]=="laserena" OR $rs[$i]["comuna"]=="LaSerena" OR $rs[$i]["comuna"]=="LA SERENA " OR $rs[$i]["comuna"]==" LA SERENA" OR $rs[$i]["comuna"]=="LA SERNA" ){
				
				$rs[$keyLaS]["total"] = $rs[$keyLaS]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			if ($rs[$i]["comuna"]=="COQUIMBO" ){

				$keyCoquimboCol=$i;
			}
			
			//ARREGO COQUIMBO

			if ($rs[$i]["comuna"]==" COQUIMBO" OR $rs[$i]["comuna"]=="COQUUIMBO" OR $rs[$i]["comuna"]=="coquuimbo" OR $rs[$i]["comuna"]=="COQUIMBIO" OR $rs[$i]["comuna"]=="coquimbio" OR $rs[$i]["comuna"]=="Coquimbio" OR $rs[$i]["comuna"]=="COQUIMBI" OR $rs[$i]["comuna"]=="coquimbi" OR $rs[$i]["comuna"]=="COQUIMBP" OR $rs[$i]["comuna"]=="COQUIMBOI" OR $rs[$i]["comuna"]=="COQUIBO" ){
				
				$rs[$keyCoquimboCol]["total"] = $rs[$keyCoquimboCol]["total"] + $rs[$i]["total"];

				unset($rs[$i]);
				continue;
			}
			//arreglos para Vicuña

			if ($rs[$i]["comuna"]=="VICU&Ntilde;A " ){

				$keyVicuña=$i;

				$rs[$i]["comuna"] = "VICUÑA";	
				continue;
			}

			if ($rs[$i]["comuna"]=="VICUNA" OR $rs[$i]["comuna"]=="VICUNA" OR $rs[$i]["comuna"]=="VICUNA " OR $rs[$i]["comuna"]==" VICUNA" OR $rs[$i]["comuna"]=="BICUNA" OR $rs[$i]["comuna"]==" BICUNA" OR $rs[$i]["comuna"]=="BICUNA " ) {

				$rs[$keyVicuña]["total"] = $rs[$keyVicuña]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
			}

			//arreglos para GUANAQUEROS

			if ($rs[$i]["comuna"]=="GUANAQUEROS" ){
				$keyGuanaqueros=$i;
				
			}

			if ($rs[$i]["comuna"]=="GUNAQUEROS" OR $rs[$i]["comuna"]=="GUANAQUERO" OR $rs[$i]["comuna"]=="GUANNAQUEROS" OR $rs[$i]["comuna"]=="GUASNAQUERO" OR $rs[$i]["comuna"]=="GUANAQUEROS "  ){
				
				$rs[$keyGuanaqueros]["total"] = $rs[$keyGuanaqueros]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}

			//arreglos para COPIAPO

			if ($rs[$i]["comuna"]=="COPIAPO" ){
				$keyCopiapo=$i;
				
			}

			  

			if ($rs[$i]["comuna"]=="COPIAP&Oacute;" OR $rs[$i]["comuna"]=="COPIAP&Oacute; " OR $rs[$i]["comuna"]==" COPIAP&Oacute;" OR $rs[$i]["comuna"]=="Copiap&oacute;" OR $rs[$i]["comuna"]==" Copiap&oacute; " OR $rs[$i]["comuna"]=="copiap&oacute;" OR $rs[$i]["comuna"]==" copiap&oacute;"
				OR $rs[$i]["comuna"]=="copiap&oacute; "  ){
				
				$rs[$$keyCopiapo]["total"] = $rs[$$keyCopiapo]["total"] + $rs[$i]["total"];
				unset($rs[$i]);
				continue;
			}
		}*/

		return $rs;



	}

	public function getTotalUser (){
		$a = new controlEstadisticas();
		$apo=$a->ciudadApo();
		$est=$a->ciudadEst();
		$col=$a->ciudadCol();
            $suma =0;

            for ($i=0; $i < count($apo) ; $i++) { 
              
              $suma = $suma + $apo[$i]["total"];
            }

            for ($i=0; $i < count($est) ; $i++) { 
              
              $suma = $suma + $est[$i]["total"];
            }

            for ($i=0; $i < count($col) ; $i++) { 
              
              $suma = $suma + $col[$i]["total"];
            }
            
           echo($suma);

	}
	

	public function ciudadMax(){
	$a = new controlEstadisticas();
		$apo=$a->ciudadApo();
		$est=$a->ciudadEst();
		$col=$a->ciudadCol();
            $ciudad1;
            $Total1;

            $ciudad2;
            $Total2;

            $ciudad3;
            $Total3;

			$ciudad1 =trim($apo[0]["ciudad"]);
			$Total1=$apo[0]["total"];

			$ciudad2 =trim($est[0]["ciudad"]);
			$Total2=$est[0]["total"];

			$ciudad3 =trim($col[0]["comuna"]);
			$Total3=$col[0]["total"];

			if ($ciudad1 == $ciudad2) {
				$sum = $Total1 + $Total2;
				if ($sum > $Total3 ) {
					echo "$ciudad1";
				}
			}
			elseif ($ciudad1 == $ciudad3) {
				$sum = $Total1 + $Total3;
				if ($sum > $Total2 ) {
					echo "$ciudad1";
				}
			}
			elseif ($ciudad2 == $ciudad3) {
				$sum = $Total2 + $Total3;
				if ($sum > $Total1 ) {
					echo "$ciudad2";
				}
			}
			elseif ($ciudad1 == $ciudad2 and $ciudad2 == $ciudad3) {
				$sum = $Total1 + $Total2 + $Total3;
				if ($sum > $Total1 ) {
					echo "$ciudad2";
				}
			}
			else{
				if ($Total1 > ($Total2 + $Total3)) {
					echo "$ciudad1";
				}
				elseif ($Total2 > ($Total1 + $Total3)) {
					echo "$ciudad2";
				}
				elseif ($Total3 > ($Total2 + $Total1)) {
					echo "$ciudad3";
				}

			}

}

	public function porcentaje (){
		$a = new controlEstadisticas();
		$apo=$a->ciudadApo();
		$est=$a->ciudadEst();
		$col=$a->ciudadCol();
		
		

		$porcentajeCiudad;

		$ciudad1 =trim($apo[0]["ciudad"]);
			$Total1=$apo[0]["total"];

			$ciudad2 =trim($est[0]["ciudad"]);
			$Total2=$est[0]["total"];

			$ciudad3 =trim($col[0]["comuna"]);
			$Total3=$col[0]["total"];

			$suma =0;

            for ($i=0; $i < count($apo) ; $i++) { 
              
              $suma = $suma + $apo[$i]["total"];
            }

            for ($i=0; $i < count($est) ; $i++) { 
              
              $suma = $suma + $est[$i]["total"];
            }

            for ($i=0; $i < count($col) ; $i++) { 
              
              $suma = $suma + $col[$i]["total"];
            }

			if ($ciudad1 == $ciudad2) {
				$sum = $Total1 + $Total2;
				if ($sum > $Total3 ) {
					$porcentaje = (100*$sum)/$suma;
					echo "$sum (".round(($porcentaje),1)."%)";
				}
			}
			elseif ($ciudad1 == $ciudad3) {
				$sum = $Total1 + $Total3;
				if ($sum > $Total2 ) {
					$porcentaje = (100*$sum)/$suma;
					echo "$sum (".round(($porcentaje),1)."%)";
				}
			}
			elseif ($ciudad2 == $ciudad3) {
				$sum = $Total2 + $Total3;
				if ($sum > $Total1 ) {
					$porcentaje = (100*$sum)/$suma;
					echo "$sum (".round(($porcentaje),1)."%)";
				}
			}
			elseif ($ciudad1 == $ciudad2 and $ciudad2 == $ciudad3) {
				$sum = $Total1 + $Total2 + $Total3;
				if ($sum > $Total1 ) {
					$porcentaje = (100*$sum)/$suma;
					echo "$sum (".round(($porcentaje),1)."%)";
				}
			}
			else{
				if ($Total1 > ($Total2 + $Total3)) {
					$porcentaje = (100*$Total1)/$suma;
					echo "$Total1 (".round(($porcentaje),1)."%)";
				}
				elseif ($Total2 > ($Total1 + $Total3)) {
					$porcentaje = (100*$Total2)/$suma;
					echo "$Total2 (".round(($porcentaje),1)."%)";
				}
				elseif ($Total3 > ($Total2 + $Total1)) {
					$porcentaje = (100*$Total3)/$suma;
					echo "$Total3 (".round(($porcentaje),1)."%)";
				}

			}

}

public function muestraNivel(){
	$direc = new direccionDao();
	$rs=$direc->getNivelCurso();

	foreach ($rs as $key => $value) {
                  echo "<option value =".$value["id_tipo_curso"].">".$value["descrip2"]."</option>";
                }

		return $rs;

}

public function muestraCurso(){
	$direc = new direccionDao();
	$rs=$direc->getCurso();

	foreach ($rs as $key => $value) {
                  echo "<option value =".$value["id_curso"].">".$value["nombre_curso"]."</option>";
                }

		return $rs;

}

public function fNivel($nivel,$checkBox){

	$direc = new direccionDao();
	if ($checkBox == "estudiante" and $nivel > 0) {
		$rs=$direc->filtroEstNivel($nivel);
		return $rs;
	}
	if ($checkBox == "estudiante" and $nivel == 0 ) {
			$rs=$direc->getEstDirec();
			return $rs;
		}

		if ($checkBox == "apoderado" and $nivel > 0) {
		$rs=$direc->filtroApoNivel($nivel);
		return $rs;
	}


	if ($checkBox == "apoderado" and $nivel == 0) {
		$rs=$direc->filtroApoNivelAll();
		return $rs;
		
	}

	if ($checkBox == "all" and $nivel > 0) {
		$rApo=$direc->filtroApoNivel($nivel);
		$rEst=$direc->filtroEstNivel($nivel);
		$result=array_merge($rApo,$rEst);
		return $result;
		
	}

	if ($checkBox == "all" and $nivel == 0) {
		$rEst=$direc->getEstDirec();
		$rApo=$direc->filtroApoNivelAll();
		$result=array_merge($rApo,$rEst);
		return $result;
		
	}
	if ($checkBox == null and $nivel > 0) {
		$rApo=$direc->filtroApoNivel($nivel);
		$rEst=$direc->filtroEstNivel($nivel);
		$result=array_merge($rApo,$rEst);
		return $result;
	}
	if ($checkBox == null and $nivel == 0) {
		$rEst=$direc->getEstDirec();
		$rApo=$direc->filtroApoNivelAll();
		$result=array_merge($rApo,$rEst);
		return $result;
	}
	
	
}

public function fCurso($nivel,$checkBox){
	$direc = new direccionDao();
	if ($checkBox == "estudianteCurso" and $nivel > 0) {
		$rs=$direc->filtroEstCurso($nivel);
		return $rs;

	}
	if ($checkBox == "estudianteCurso" and $nivel == 0 ) {
			$rs=$direc->getEstDirec();
			return $rs;
		}
		if ($checkBox == "apoderadoCurso" and $nivel > 0) {
		$rs=$direc->filtroApoCurso($nivel);
		return $rs;

	}
	if ($checkBox == "apoderadoCurso" and $nivel == 0 ) {
			$rs=$direc->filtroApoNivelAll();
			return $rs;
		}

		if ($checkBox == "all" and $nivel == 0) {
		$rEst=$direc->getEstDirec();
		$rApo=$direc->filtroApoNivelAll();
		$result=array_merge($rApo,$rEst);
		return $result;
		
	}
	if ($checkBox == "all" and $nivel > 0) {
		$rApo=$direc->filtroApoCurso($nivel);
		$rEst=$direc->filtroEstCurso($nivel);
		$result=array_merge($rApo,$rEst);
		return $result;
		
	}

	if ($checkBox == null and $nivel > 0) {
		$rApo=$direc->filtroApoCurso($nivel);
		$rEst=$direc->filtroEstCurso($nivel);
		$result=array_merge($rApo,$rEst);
		return $result;
	}
	if ($checkBox == null and $nivel == 0) {
		$rEst=$direc->getEstDirec();
		$rApo=$direc->getApodDireccion();
		$result=array_merge($rApo,$rEst);
		return $result;
	}


}




}


