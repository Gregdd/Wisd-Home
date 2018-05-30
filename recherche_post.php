<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisdhome;charset=utf8','root','root');
}
catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

session_start();

if (!empty($_POST['nom'])){
    $nom = $_POST['nom'];
    $req=$bdd->query("SELECT * FROM utilisateur WHERE Nom='$nom'");
    $clientnom = $req->fetch();
    $_SESSION['client']['Nom']=$clientnom['Nom'];
    $req->closeCursor();

    header('Location: Resultat.php');

    exit();
}

if (!empty($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
    $_SESSION['client']=$bdd->query("SELECT * FROM utilisateur WHERE pseudo LIKE '$pseudo'");
    header('Location: Resultat.php');
    exit();
}

?>
