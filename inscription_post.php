<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisdhome', 'root', 'root');
}catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


// Vérification de la validité des informations
if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['identifiant']) && !empty($_POST['mail']) && !empty($_POST['codepost'])&& !empty($_POST['ville']) && !empty($_POST['pass']) && !empty($_POST['pass2'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $identifiant = $_POST['identifiant'];
    $pass = sha1($_POST['pass']);
    $pass2 = sha1($_POST['pass2']);
    $mail = $_POST['mail'];
    $codepost = $_POST['codepost'];
    $ville = $_POST['ville'];



}


// Insertion
    $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, Mot_de_passe, Nom ,Prenom , mail ) VALUES(:identifiant, :pass, :nom, :prenom, :mail)');
    $req->execute(array(
        'identifiant' => $identifiant,
        'pass' => $pass,
        'nom' => $nom,
        'prenom' => $prenom,
        'mail' => $mail));


header ('Location:connexion_git.php');
//modif salim

?>

