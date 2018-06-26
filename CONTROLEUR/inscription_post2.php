<?php

include 'database.php';
include '../MODELE/fonctionSQL.php';

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

    inscription($pseudo,$pass,$nom,$prenom,$mail,$adresse,$ville,$code_post,$bday,$reponse,$question);
    
    header('Location: ../VUE/Connexion.php');
}


?>
