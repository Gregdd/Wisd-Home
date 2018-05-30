<?php

include 'database.php';

// Vérification de la validité des informations
if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['identifiant']) && !empty($_POST['mail']) && !empty($_POST['codepost'])&& !empty($_POST['ville']) && !empty($_POST['pass']) && !empty($_POST['pass2']&& !empty($_POST['Reponse']) && !empty($_POST['question']) && !empty($_POST['bday']) && !empty($_POST['adresse']) )) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $identifiant = $_POST['identifiant'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $mail = $_POST['mail'];
    $Code_postal = $_POST['codepost'];
    $Ville = $_POST['ville'];
    $Reponse = $_POST['Reponse'];
    $question = $_POST['question'];
    $bday = $_POST['bday'];
    $Adresse = $_POST["adresse"];
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        if ($pass == $pass2) {
            $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, Mot_de_passe, Nom ,Prenom , mail, Code_postal, Ville, Reponse, question, Date_naissance, Adresse) VALUES(:identifiant, :pass, :nom, :prenom, :mail, :Code_postal, :Ville, :Reponse, :question, :bday, :adresse)');
            $req->execute(array(
                'identifiant' => $identifiant,
                'pass' => $pass,
                'nom' => $nom,
                'prenom' => $prenom,
                'mail' => $mail,
                'Code_postal' => $Code_postal,
                'Ville' => $Ville,
                'Reponse' => $Reponse,
                'question' => $question,
                'bday' => $bday,
                'adresse' => $Adresse));
            $erreur = "Votre compte a bien été créé ! <a href=\"Connexion.php\">Me connecter</a>";
            header ('Location:Connexion.php');
        } else {
            $erreur = "Vos mots de passes ne correspondent pas !";
            header ('Location:inscription.php');
        }
    } else {
        $erreur = "Votre adresse mail n'est pas valide !";
        header ('Location:inscription.php');
    }
}
// Insertion
//header ('Location:connexion.php');
?>


