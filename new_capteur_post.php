<?php

include 'database.php';

$type = $_POST['type'];
$unite = $_POST['unite'];

$sql = $bdd->prepare('INSERT INTO capteur(capteurNom, unit) VALUES (:nom, :unite)');
$sql->execute(array('nom'=>$type, 'unite'=>$unite )) ;

$sql->closeCursor();
header('Location: new_capteur.php');

?>
