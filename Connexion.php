<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<title>Connexion</title>
<link rel="stylesheet" href="Footer.css">
<link rel="stylesheet" href="Connexion.css"/>
</head>
    
<body>
    
<?php include 'Header_1.php';?>

<main>
<div>
    <fieldset>
        <legend>Connexion</legend>

        <form method="post" action="traitement.php">
            <br/>
            <label for="Identifiant">Identifiant :</label>
            <input type="text" name="Identifiant" id="Identifiant" size="30" placeholder="Ex : Dupont Marc" maxlength="30" /><br/><br/>
            <label for="pass">Mot de passe :</label>
            <input type="password" name="pass" id="pass" size="30" maxlength="30" /><br/><br/>
            <label for="Souvenir"> Se souvenir de moi</label>
            <input type="checkbox" name="Souvenir" id="Souvenir" /><br/><br/>
            <input type="submit" value="Connexion"><br/><br/>
        </form>

        <a href="MDP_perdu.php" title="Mot de passe oublié" target="_blank">Mot de passe oublié ?</a>

    </fieldset>
</div>
</main>

<?php include 'Footer.php';?>
    
</body>
</html>



/* CODE PHP DE CONNEXION

<?php
$error_message='';
$bdd = new PDO("mysql:host=localhost; dbname=mydb; charset=utf8","root","root");
$entrees=$bdd->query("SELECT * FROM utilisateur"); //on se place dans la table admiistrateur de la BDD
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
                echo '<h1>BIENVENUE</h1>';
                //header ('Location: View/backoffice_clients.php');
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

*/
