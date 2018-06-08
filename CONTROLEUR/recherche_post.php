<?php

include 'database.php';
include '../MODELE/fonctionSQL.php';
session_start();

if (!empty($_POST['nom'])){
    $nom = $_POST['nom'];

    rechercheByNOM($nom);

    header('Location: ../VUE/Resultat.php');

    exit();
}

if (!empty($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];

    rechercheByPSEUDO($pseudo);

    header('Location: ../VUE/Resultat.php');
    exit();
}

?>
