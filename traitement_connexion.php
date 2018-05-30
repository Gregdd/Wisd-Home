<?php
$error_message='';
include 'database.php';

$entrees=$bdd->query("SELECT * FROM Connexion"); //on se place dans la table admiistrateur de la BDD
if(false==empty($_POST)) //Si le champ d'entrée n'est pas vide
{
    $post_username = $_POST['ID']; //On associe la valeur entrée à $post_username
    $post_password = $_POST['password'];
    while ($ligne = $entrees -> fetch())
    {
        if($post_username==$ligne["Code_utilisateur"] ) //Si l'identifiant correspond
        {
            if($post_password==$ligne["Mot_de_passe"] || password_verify($post_password, $ligne["Mot_de_passe"])==true) //Si le mdp correspond
            {
                session_start(); //on démarre la session
                $_SESSION['nom'] = $ligne["Nom"];
                $_SESSION['prenom'] = $ligne["Prenom"];
                $_SESSION['status']="Active";
                header ('Location: http://localhost/APP_Site/Accueil_2.php');
                exit();
            }
            else //Si les login et mdp ne match pas, on l'indique
            {
                $error_message='Erreur de nom d\'utilisateur ou de mot de passe';
                echo $error_message;
            }
        }
        else //Si les login et mdp ne match pas, on l'indique
        {
            $error_message='Erreur de nom d\'utilisateur ou de mot de passe';
            echo $error_message;
        }
    }
}
if (false == empty($error_message))
{
    $error_message="<div class=\"alert alert-danger\" role=\"alert\">$error_message</div>";
}
?>
