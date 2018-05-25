<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisdhome;charset=utf8','root','monmotdepasse');
}
catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


if (!empty($_POST['nom'])){
    $nom = $_POST['nom'];
    $_SESSION['client'] =$bdd->query("SELECT * FROM utilisateur WHERE nom LIKE '$nom'");
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
