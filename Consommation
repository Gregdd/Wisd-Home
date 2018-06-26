<?php
//Conversion données type sql à json
if (!function_exists('json_encode'))
{
	function json_encode($a=false)
	{
		if (is_null($a)) return 'null';
		if ($a === false) return 'false';
		if ($a === true) return 'true';
		if (is_scalar($a))
		{
			if (is_float($a))
			{
				// Always use "." for floats.
				return floatval(str_replace(",", ".", strval($a)));
			}
			
			if (is_string($a))
			{
				static $jsonReplaces = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
				return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"';
			}
			else
				return $a;
		}
		$isList = true;
		for ($i = 0, reset($a); $i < count($a); $i++, next($a))
		{
			if (key($a) !== $i)
			{
				$isList = false;
				break;
			}
		}
		$result = array();
		if ($isList)
		{
			foreach ($a as $v) $result[] = json_encode($v);
			return '[' . join(',', $result) . ']';
		}
		else
		{
			foreach ($a as $k => $v) $result[] = json_encode($k).':'.json_encode($v);
			return '{' . join(',', $result) . '}';
		}
	}
}
	
require 'database.php';

$donnees = $bdd->query('SELECT month(Date) as mois, conso_eau, conso_elec from consommation ORDER BY mois ASC') or die(print_r($bdd->errorInfo()));
//$donnees = $bdd->query($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//$i=0;
$moisFr=array(0,'Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
$tab= array();
while($req = $donnees->fetch()) {
	$tab[]=$req;
	echo $moisFr[$req['mois']].' : '."\t".'Eau : '.$req['conso_eau']."\t".'Electricité : '.$req['conso_elec'];
	echo "<br/>";
}
//echo '<br/>'.json_encode($tab);
$tableau = json_encode($tab);
$donnees -> closeCursor();



?>

<html>
  <head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart', 'bar']});
      
   // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawStuff);
	
      function drawVisualization() {
          var jsonData = null;
   
          var json = $.ajax({
            url: "conso_user.php", // make this url point to the data file
            dataType: 'json',
            async: false,
            success: (
          function(data) {
              jsonData = data;
          })
          }).responseText;
          
       
          
          // Create and populate the data table.
          var data = google.visualization.DataTable('<?php $tableau?>');
            
        
          // Create and draw the visualization.
          new google.visualization.BarChart(document.getElementById('visualization')).
              draw(data, {curveType: "function",
                          width: 500, height: 400,
                          vAxis: {maxValue: 10}}
                  );
        }
        
   
        google.setOnLoadCallback(drawVisualization);
      </script>
    </head>
    <body style="font-family: Arial;border: 0 none;">
      <div id="visualization" style="width: 500px; height: 400px;"></div>
    </body>
  </html>
