<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisdhome;charset=utf8', "root", "root");
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}






$req = $bdd->prepare('DELETE FROM faq WHERE ID = :ID'); // on sélectionne le paramètre en fonction duquel on va supprimer le device
$affectedLines = $req -> execute(array('ID' => $_POST['ID'])); // on effectue la suppression
$return = $req->fetch();



header('Location: ../faq/messagerie_back.php'); // retour à la page articles
?>
