<?php

function afficher_capteur(){
    include '../CONTROLEUR/database.php';
    $id = $_GET["ideal"];

    $req = $bdd->prepare('SELECT typecapteur,idcapteur FROM capteurpiece WHERE idpiece= ?');
    $req->execute(array($id[0]));

    while ($capteur = $req->fetch())
    {
        echo ('
            <li  class="carre">
                <a class="lien"  href="../VUE/info_capteur.php?ideal2='.$capteur['idcapteur'].'">'.$capteur['typecapteur'].'</a> 
            </li> ');
    }

    $req->closeCursor();
}


function afficher_actionneur(){
    include '../CONTROLEUR/database.php';
    $id = $_GET["ideal"];

    $req = $bdd->prepare('SELECT typeactionneur,idactionneur FROM actionneurpiece WHERE idpiece= ?');
    $req->execute(array($id[0]));

    while ($actionneur = $req->fetch())
    {
        echo ('
            <li  class="carre">
                <a class="lien"  href="../VUE/info_actionneur.php?ideal2='.$actionneur['idactionneur'].'">'.$actionneur['typeactionneur'].'</a> 
            </li> ');
    }

    $req->closeCursor();
}

?>


