<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=wisdhome;charset=utf8','root','monmotdepasse');
}
catch(Exception $e) {
die('Erreur : ' . $e->getMessage());
}
?>
