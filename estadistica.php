<?php
  
  require("Control/controlEstadisticas.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <meta name="viewport" content="initial-scale=1.0,
            width=device-width" />
        <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
            type="text/javascript" charset="utf-8"></script>
        <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
            type="text/javascript" charset="utf-8"></script>
        <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"
            type="text/javascript" charset="utf-8"></script>
        <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"
       type="text/javascript" charset="utf-8"></script>

            
    
  
    <script type="text/javascript">
      <?php 

          $a = new controlEstadisticas();
          
          
          ?>
      
      google.charts.load('current',{'packages':['corechart','bar']});
      
      google.charts.setOnLoadCallback(drawEstChart);

      google.charts.setOnLoadCallback(drawApoChart);
      
      google.charts.setOnLoadCallback(drawColChart);
      
      function drawEstChart() {

        
        var data = google.visualization.arrayToDataTable([
          ['Ciudad', 'Cantidad'],
          <?php 

          $ant=$a->ciudadEst();

          foreach ($ant as $key => $val) {?>
           ["<?php echo $val["ciudad"] ?>",{v: <?php echo $val["total"]?>,f:"TOTAL :<?php echo $val["total"]?>"}],
          <?php }
          ?>
        ]);

        var options = {
          title: 'Estudiantes',
          legend: { position: 'top' },
          pieHole: 0.4,
          backgroundColor:'#D5D8DC',
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('graficoPie1'));
         
        chart.draw(data, options);
      }
            

      
      function drawApoChart() {

        
        var data = google.visualization.arrayToDataTable([
          ['Ciudad', 'Cantidad'],
          <?php 

          $ant=$a->ciudadApo();

          foreach ($ant as $key => $val) {?>
            
           ["<?php echo $val["ciudad"] ?>",{v: <?php echo $val["total"]?>,f:"TOTAL :<?php echo $val["total"]?>"}],
          <?php }
          ?>
        ]);

        var options = {
          title: 'Apoderados',
         legend: { position: 'top' },
          pieHole: 0.4,
          backgroundColor:'#D5D8DC',
        };

        var chart = new google.visualization.PieChart(document.getElementById('graficoPie2'));
        chart.draw(data, options);
      }

      function drawColChart() {

        
        var data = google.visualization.arrayToDataTable([
          ['Ciudad', 'Cantidad'],
          <?php 

          $ant=$a->ciudadCol();

          foreach ($ant as $key => $val) {?>
            
           ["<?php echo $val["comuna"] ?>",{v: <?php echo $val["total"]?>,f:"TOTAL :<?php echo $val["total"]?>"}],
          <?php }
          ?>
        ]);

        var options = {
          title: 'Colaboradores',
         legend: { position: 'top' },
          backgroundColor:'#D5D8DC',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('graficoPie3'));
        chart.draw(data, options);
      }

      
    </script>

    
    
      

   
 </head>
  <body class="estadisticas">
    <div class ="gridContenedor">


      <header class="header"> <h2 class="encabezado">Graficos</h2></header>
<div class="info">
       
        <div class="datos" >
          <h3 class="descripcionBanner">Usuarios Totales</h3>
          <h2 class="datoBanner"><?php 
            $all=$a->getTotalUser();
            
            echo "$all";
          
            
           ?></h2>

        </div>
        <div class="datos" >
          <h3 class="descripcionBanner">Ciudad</h3>
          <h2 class="datoBanner"><?php 
          $all=$a->ciudadMAx();
            
          echo "$all"; ?></h2>

        </div>
        <div class="datos" >
          <h3 class="descripcionBanner">Porcentaje</h3>
          <h2 class="datoBanner"><?php 
          $porcent=$a->porcentaje();
            
          echo "$porcent"; ?></h2>
        </div>
      </div>

      <div class="graficosPie">
        
      <div class="graficoPIE" id="graficoPie1" ></div> 

      <div class="graficoPIE" id="graficoPie2" ></div> 
      
      <div class="graficoPIE" id="graficoPie3"></div> 

       </div>
      
      <div class="graficoBar" >
        <!--<div class="bar" id="test" style="border: 1px solid #ccc ; height: 500px;">-->

          <div class="form">
          <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])  ?>" method="post" style="width: 100%;">
            <h3>geolocalizacion por nivel</h3>
            <div class="formulario">
              <input type="checkbox" name="estudiante1">Estudiante <input type="checkbox" name="apoderado1">Apoderado
            </div>
            <div class="formulario">
              <h3>nivel</h3>
              <select name="niveles">
                <option value="0" >seleccione nivel</option>
                <?php  

                $nivel = $a->muestraNivel();
                
                ?>
                
              </select><br><br>

              <input type="submit" name="boton1" value="BUSCAR">

            </div>
          </form>
             </div>
             <div class="form" >
        
          <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])  ?>" method="post" style="width: 100%;">
            <h3>geolocalizacion por curso</h3>
            <div class="formulario">
              <input type="checkbox" name="estudianteCurso">Estudiante <input type="checkbox" name="apoderadoCurso">Apoderado
            </div>
            <div class="formulario">
              <h3>Curso</h3>
              <select name="niveles">
                <option value="0">seleccione curso</option>
                <?php  

                $nivel = $a->muestraCurso();
                

                ?>
                
              </select><br><br>

              <input type="submit" name="boton2" value="BUSCAR">

            </div>
          </form>
             

        </div>
        </div>
        
        
        <div class="mapa" id="mapContainer" style="width: 90%; height: 450px; "></div>

    <script type="text/javascript" charset="utf-8">


     
      // Initialize the platform object:
      var platform = new H.service.Platform({
        'apikey': '***********************'
      });

      // Obtain the default map types from the platform object
      var maptypes = platform.createDefaultLayers();


      // Instantiate (and display) a map object:
      var map = new H.Map(
        document.getElementById('mapContainer'),
        maptypes.vector.normal.map,
        {

          zoom: 11.5,
          center: { lng:-71.2998935164069 , lat: -29.968958955347265 }, 
          
        });
      var mapEvents = new H.mapevents.MapEvents(map);

// Add event listeners:
map.addEventListener('tap', function(evt) {
    // Log 'tap' and 'mouse' events:
    console.log(evt.type, evt.currentPointer.type);
});

// Instantiate the default behavior, providing the mapEvents object:
var behavior = new H.mapevents.Behavior(mapEvents);
      
  

      
      
      
      
      </script>


      <script type="text/javascript">





      // Instantiate a map and platform object:
var platform = new H.service.Platform({
  'apikey': '********************'
});

// Get an instance of the geocoding service:
var service = platform.getSearchService();
/*var svgMarkup = '<svg width="24" height="24" ' +
    'xmlns="http://www.w3.org/2000/svg">' +
    '<rect stroke="white" fill="#1b468d" x="1" y="1" width="22" ' +
    'height="22" /><text x="12" y="18" font-size="12pt" ' +
    'font-family="Arial" font-weight="bold" text-anchor="middle" ' +
    'fill="white">O</text></svg>';
    var icon = new H.map.Icon(svgMarkup);*/

// Call the geocode method with the geocoding parameters,
// the callback and an error callback function (called if a
// communication error occurs):
<?php 
if (isset($_POST['boton1']) ) {
            if (isset($_POST['estudiante1']) and !isset($_POST['apoderado1'])) {
              $estu = "estudiante";
              $lvl =$_POST['niveles'];
              $test = $a->fNivel($_POST['niveles'],$estu);
               
            }
            if (isset($_POST['apoderado1']) and !isset($_POST['estudiante1'])) {
              $apode = "apoderado";
              $lvl =$_POST['niveles'];
              $test = $a->fNivel($_POST['niveles'],$apode);

             
              
            }
            if (isset($_POST['estudiante1']) and isset($_POST['apoderado1'])) {
              $x ="all";
              $lvl =$_POST['niveles'];
              $test = $a->fNivel($_POST['niveles'],$x);

              
              
            }
            if (isset($_POST['niveles']) and !isset($_POST['apoderado1']) and !isset($_POST['estudiante1'])) {
              
              $lvl =$_POST['niveles'];
              
              $test = $a->fNivel($_POST['niveles'], null);

            }
                       
          }

          //-------------------------------------------------------------------------------
          if (isset($_POST['boton2']) ) {
            if (isset($_POST['estudianteCurso']) and !isset($_POST['apoderadoCurso'])) {
              $estu = "estudianteCurso";
              $lvl =$_POST['niveles'];
              $test = $a->fCurso($_POST['niveles'],$estu);

            }
            if (!isset($_POST['estudianteCurso']) and isset($_POST['apoderadoCurso'])) {
              $estu = "apoderadoCurso";
              $lvl =$_POST['niveles'];
              $test = $a->fCurso($_POST['niveles'],$estu);
              
            }

            if (isset($_POST['estudianteCurso']) and isset($_POST['apoderadoCurso'])) {
              $x ="all";
              $lvl =$_POST['niveles'];
              $test = $a->fCurso($_POST['niveles'],$x);

              
              
            }
            if (isset($_POST['niveles']) and !isset($_POST['apoderadoCurso']) and !isset($_POST['estudianteCurso'])) {
              
              $lvl =$_POST['niveles'];
              
              $test = $a->fCurso($_POST['niveles'], null);

              
              
            }

          }

  foreach ($test as $key => $value) {
     // code...
   
    
  
   ?>
service.geocode({
  
  q: <?php echo "'". trim($value["calle"])." ".$value["numero"]." ". $value["ciudad"].",CL'" ; ?>
}, (result) => {
  // Add a marker for each location found
  result.items.forEach((item) => {
    map.addObject(new H.map.Marker(item.position/*,{icon: icon}*/));
  });

}, alert); <?php }; ?>



    </script>
        </div>


          
        
        
    </div>

    
    
  </body>
</html>
