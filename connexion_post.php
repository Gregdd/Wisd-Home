<?php
$error_message='';
$bdd = new PDO("mysql:host=localhost; dbname=utilisateur; charset=utf8","root","monmotdepasse");
$entrees=$bdd->query("SELECT * FROM utilisateur"); //on se place dans la table admiistrateur de la BDD
if(false==empty($_POST)) //Si le champ d'entrée n'est pas vide
{
    $post_username = $_POST['ID']; //On associe la valeur entrée à $post_username
    $post_password = $_POST['password'];
    while ($ligne = $entrees -> fetch())
    {
        if($post_username==$ligne["pseudo"] ) //Si l'identifiant correspond
        {
            if($post_password==$ligne["Mot_de_passe"] || password_verify($post_password, $ligne["Mot_de_passe"])==true) //Si le mdp correspond
            {
                session_start(); //on démarre la session
                $_SESSION['nom'] = $ligne["Nom"];
                $_SESSION['prenom'] = $ligne["Prenom"];
                $_SESSION['Date_naissance'] = $ligne["Date_naissance"];
                $_SESSION['mail'] = $ligne["mail"];
                $_SESSION['Ville'] = $ligne["Ville"];
                $_SESSION['Code_postal'] = $ligne["Code_postal"];
                $_SESSION['status']="Active";
                header ('Location: Accueil_2.php');
                exit();
            }
            else //Si les login et mdp ne match pas, on l'indique
            {
                $error_message='Erreur de nom d\'utilisateur ou de mot de passe';
            }
        }
        else //Si les login et mdp ne match pas, on l'indique
        {
            $error_message='Erreur de nom d\'utilisateur ou de mot de passe';
        }
    }
}
if (false == empty($error_message))
{
    $error_message="<div class=\"alert alert-danger\" role=\"alert\">$error_message</div>";
}
?>
