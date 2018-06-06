<?php

include 'database.php';

//RECUPERATION DES DONNEES
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

$pseudo = $_POST['identifiant'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

$mail = $_POST['mail'];

$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$code_post = $_POST['codepost'];

$question = $_POST['question'];
$reponse = $_POST['reponse'];

$bday = $_POST['bday'];


if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

    $sql = $bdd->prepare('INSERT INTO utilisateur (pseudo, Mot_de_passe, Nom, Prenom, mail, Adresse, Ville, Code_postal, Date_naissance, Reponse, question) 
                                VALUES (:pseudo, :mdp, :nom, :prenom, :mail, :adresse, :ville, :code_post, :bday, :reponse, :question)');
    $sql->execute(array(
        'pseudo' => $pseudo,
        'mdp' => $pass,
        'nom' => $nom,
        'prenom' => $prenom,
        'mail' => $mail,
        'adresse' => $adresse,
        'ville' => $ville,
        'code_post' => $code_post,
        'bday' => $bday,
        'reponse' => $reponse,
        'question' => $question));

    $sql->closeCursor();
    header('Location: Connexion.php');
}


?>
