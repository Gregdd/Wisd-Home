<?php

include 'database.php';

session_start();

if (!empty($_POST['nom'])){
    $nom = $_POST['nom'];
    $req=$bdd->query("SELECT * FROM utilisateur WHERE Nom='$nom'");
    $client = $req->fetch();
    $_SESSION['client']['Nom']=$client['Nom'];
    $_SESSION['client']['Prenom']=$client['Prenom'];
    $req->closeCursor();

    header('Location: Resultat.php');

    exit();
}

if (!empty($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];

    $req=$bdd->query("SELECT * FROM utilisateur WHERE pseudo='$pseudo'");
    $client = $req->fetch();
    $_SESSION['client']['Nom']=$client['Nom'];
    $_SESSION['client']['Prenom']=$client['Prenom'];
    $req->closeCursor();

    header('Location: Resultat.php');
    exit();
}

?>
