<?php

include ('../MODELE/fonctionSQL.php');
function afficherPiece(){
    $entrees = getInfoPiece($_SESSION['pseudo']);
    while ($donnees = $entrees->fetch())
    {
        echo('<option value='.$donnees['id'].'>'.$donnees['nom'].'</option>');
    }
}

function afficherCapteur(){
    $ligne = getInfoCapteur();

    while ($donnees = $ligne->fetch())
    {
        echo('<option value='.$donnees['capteurtypeID'].'>'.$donnees['capteurNom'].'</option>');
    }
}

function afficherActionneur(){
    $ligne = getInfoActionneur();

    while ($donnees = $ligne->fetch())
    {
        echo('<option value='.$donnees['actionneurtypeID'].'>'.$donnees['actionneurNom'].'</option>');
    }
}
?>
