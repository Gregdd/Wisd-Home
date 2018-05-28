<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisdhome;charset=utf8', "root", "root");
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}




$req = $bdd->prepare('UPDATE  faq SET reponse=?  WHERE ID = ?');
$req -> execute(array($_POST['reponse'], $_POST['reponseid']));
header('Location: ../faq/messagerie_back_admin.php'); // retour à la page articles
?>

