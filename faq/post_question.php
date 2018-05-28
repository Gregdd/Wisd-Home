<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisdhome;charset=utf8', "root", "root");
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



$req = $bdd->prepare('INSERT INTO faq (question) VALUES (?)');
	$req -> execute(array($_POST['question']));

header('Location: ../faq/messagerie_back.php'); // retour à la page articles

?>
