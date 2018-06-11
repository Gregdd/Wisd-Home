<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisdhome', 'root', 'root');
}catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=0G8A");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
$data_tab = str_split($data,33);
$trame = $data_tab[count($data_tab)-2];
//$trame = $data_tab[1];

// décodage avec sscanf
list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
    sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
/*echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");
echo"<br>";
echo"numero de capteur :";
echo $n;
echo "<br>";
echo "valeur actuelle : ";
echo $v;
*/


if ( $r = 1) {
    $req = $bdd->prepare('UPDATE  capteurpiece SET valeur=? , date= current_date , heure=CURRENT_TIME  WHERE ID = ?');
    $req->execute(array($v, 10));
    $req->closeCursor();
}

$date1=$date();
var_dump($date1);

//http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=0G8A&TRAME=$trame1");

?>


