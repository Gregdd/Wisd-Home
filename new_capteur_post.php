<?php

include '../CONTROLEUR/database.php';
include '../MODELE/fonctionSQL.php';


$type = $_POST['type'];
$unite = $_POST['unite'];
$stock = $_POST['stock'];

addCapteur($type,$unite,$stock);

header('Location: ../VUE/ADMIN/new_capteur.php');

?>

