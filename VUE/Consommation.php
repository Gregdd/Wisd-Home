<?php  

require '../CONTROLEUR/database.php';

$donnees = $bdd->query('SELECT month(Date) as mois, conso_eau, conso_elec from consommation ORDER BY mois ASC') or die(print_r($bdd->errorInfo()));
//$donnees = $bdd->query($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//$i=0;
$tab= array();
$tabjson= array();
$moisFr=array(0,'Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');

//echo '<br/>'.json_encode($tab);
?>


<html>
  <head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="oXHR.js"></script>
    <script type="text/javascript">
    
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Mois', 'Consommation eau', 'Consommation electrique'],
          <?php 
          while($req = $donnees->fetch()) {
          	?>
          	['<?php echo $moisFr[$req['mois']] ?>','<?php echo $req['conso_eau'] ?>','<?php echo $req['conso_elec']?>'],
          <?php 
		}?>
        ]);

        var materialOptions = {
          width: 900,
          chart: {
            title: 'Consommation',
           
          },
          series: {
            0: { axis: 'eau' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'elec' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: 'parsecs'}, // Left y-axis.
              brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

        var classicOptions = {
          width: 900,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Nearby galaxies - distance on the left, brightness on the right',
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'parsecs'},
            1: {title: 'apparent magnitude'}
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          button.innerText = 'Change to Classic';
          button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
          button.innerText = 'Change to Material';
          button.onclick = drawMaterialChart;
        }

        drawMaterialChart();
        

    };
    drawStuff();


    </script>
 </head>
  <body>
  <?php include 'header_2.php';
  include '../CONTROLEUR/Access_denied.php';?>
<br/>
    <button id="change-chart">Change to Classic</button>
    <div id="chart_div" style="width: 800px; height: 500px;margin-left:20%;"></div>
  <?php include'footer.php';?>
  </body>
</html>
