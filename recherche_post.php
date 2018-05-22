<?php
$error_message='';
$bdd = new PDO("mysql:host=localhost; dbname=wisdhome; charset=utf8","root","monmotdepasse");



$nom = $_POST['nom'];
$pseudo = $_POST['pseudo'];

if(!empty($nom) OR !(empty($pseudo))){
    $entrees=$bdd->query("SELECT * FROM utilisateur"); //on se place dans la table admiistrateur de la BDD
    while ($ligne = $entrees -> fetch())
    {
        if($nom==$ligne["nom"] ){
            $_SESSION['client'] =$bdd->query("SELECT * FROM utilisateur WHERE nom = $nom");
            header('Location : resultat.php');
        }
        if($pseudo == $ligne["pseudo"]){
            $_SESSION['client'] =$bdd->query("SELECT * FROM utilisateur WHERE pseudo=$pseudo");
            header('Location : resultat.php');
        }

    }
}

?>
