<?php

include '../CONTROLEUR/database.php';

//MODELE

$req = $bdd->prepare('UPDATE  faq SET reponse=?  WHERE ID = ?');
$req -> execute(array($_POST['reponse'], $_POST['reponseid']));
header('Location: ../VUE/messagerie_back_admin.php'); // retour à la page articles
?>

