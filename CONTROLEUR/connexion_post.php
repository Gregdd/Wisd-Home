<?php
$error_message='';
include 'database.php';
include '../MODELE/fonctionSQL.php';
if(!empty($_POST)) //Si le champ d'entrée n'est pas vide
{
    $pseudo = $_POST['ID']; 
    $password = $_POST['password'];
    $entrees = connexion($pseudo);
    if (empty($entrees)){
        $error_message='ce pseudo n\'existe pas.';
    }
    else
    {
        while ($ligne = $entrees -> fetch())
        {
            if($password==$ligne["Mot_de_passe"] || password_verify($password, $ligne["Mot_de_passe"])) //Si le mdp correspond
            {
                session_start(); //on démarre la session
                $_SESSION['nom'] = $ligne["Nom"];
                $_SESSION['prenom'] = $ligne["Prenom"];
                $_SESSION['pseudo'] = $ligne["pseudo"];
                $_SESSION['bday'] = $ligne["Date_naissance"];
                $_SESSION['mail'] = $ligne["mail"];
                $_SESSION['Ville'] = $ligne["Ville"];
                $_SESSION['Code_postal'] = $ligne["Code_postal"];
                $_SESSION['Adresse'] = $ligne["Adresse"];
                $_SESSION['ID']= $ligne['ID'];
                $_SESSION['status']="Active";
               if ($ligne['Type_utilisateur'] == 'Administrateur'){
                   header ('Location: ../VUE/Accueil_admin.php');
                    exit();
                }
                header ('Location: ../VUE/Accueil_2.php');
                exit();
            }
            else //Si les login et mdp ne match pas, on l'indique
            {
              header ('Location: ../VUE/Connexion.php');
              exit();
            }
        }
    }
}
if (!empty($error_message))
{
    $error_message="<div class=\"alert alert-danger\" role=\"alert\">$error_message</div>";
}
?>
