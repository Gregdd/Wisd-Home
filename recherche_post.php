<?php

include 'database.php';
include '../MODELE/fonctionSQL.php';


if (!empty($_POST['nom'])){
    $nom = $_POST['nom'];

    rechercheByNOM($nom);

    header('Location: ../VUE/ADMIN/Resultat.php');

    exit();
}

if (!empty($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];

    rechercheByPSEUDO($pseudo);

    header('Location: ../VUE/ADMIN/Resultat.php');
    exit();
}

?>
