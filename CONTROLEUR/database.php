<?php
try
{
// Je donne les paramètres au constructeur :
$bdd = new PDO('mysql:host=localhost;dbname=wisdhome', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

}
catch(Exception $e) {
die('Erreur : ' . $e->getMessage());
}
?>
