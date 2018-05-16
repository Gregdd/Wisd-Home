
<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=TABLE', 'root', 'root');
}catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


// Vérification de la validité des informations
if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['identifiant']) && !empty($_POST['mail']) && !empty($_POST['codepost'])&& !empty($_POST['ville']) && !empty($_POST['pass']) && !empty($_POST['pass2'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $identifiant = $_POST['identifiant'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $mail = $_POST['mail'];
    $codepost = $_POST['codepost'];
    $ville = $_POST['ville'];

    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        if ($pass == $pass2) {
            $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, Mot_de_passe, Nom ,Prenom , mail ) VALUES(:identifiant, :pass, :nom, :prenom, :mail)');
            $req->execute(array(
                'identifiant' => $identifiant,
                'pass' => $pass,
                'nom' => $nom,
                'prenom' => $prenom,
                'mail' => $mail));
            $erreur = "Votre compte a bien été créé ! <a href=\"Connexion.php\">Me connecter</a>";
            header ('Location:connexion.php');


        } else {
            $erreur = "Vos mots de passes ne correspondent pas !";
            header ('Location:inscription.php');

        }
    } else {
        $erreur = "Votre adresse mail n'est pas valide !";
        header ('Location:inscription.php');

    }
}
//modif




?>


