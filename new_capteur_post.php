<?php

include 'database.php';

$type = $_POST['type'];
$unite = $_POST['unite'];

$sql = $bdd->prepare('INSERT INTO capteur(capteurNom, unit) VALUES (:nom, :unite)');    //requete sql
$sql->execute(array('nom'=>$type, 'unite'=>$unite )) ;
echo'ajouté';
$sql->closeCursor();

?>
