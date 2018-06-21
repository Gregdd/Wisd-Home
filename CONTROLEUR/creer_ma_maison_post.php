<?php

include '../MODELE/fonctionSQL.php';


//insertion
if ((!empty($_POST['newPiece']))&& (!empty($_POST['superficie']) ) ) {
    $newPiece = $_POST['newPiece'];
    $superficie = $_POST['superficie'];
    addPiece($newPiece,$superficie,$_SESSION['ID']);
    header ('Location: ../VUE/creer_ma_maison.php');
}

//nouveau capteur
if((!empty($_POST['pieceCapteur'] AND !empty($_POST['capteur'])))){
    $pieceCapteur = $_POST['pieceCapteur'];
    $capteur = $_POST['capteur'];
    addCapteurPiece($capteur,$pieceCapteur);
    header ('Location: ../VUE/creer_ma_maison.php');
}

//nouveau actionneur
if((!empty($_POST['pieceActionneur'] AND !empty($_POST['actionneur'])))){
    $pieceActionneur = $_POST['pieceActionneur'];
    $actionneur = $_POST['actionneur'];
    addActionneurPiece($actionneur,$pieceActionneur);
    header ('Location: ../VUE/creer_ma_maison.php');
}

//supprimer piece
if (!empty($_POST['piecesuppr'])) {
    $piecesuppr = $_POST['piecesuppr'];
    deletePiece($piecesuppr);
    header ('Location: ../VUE/creer_ma_maison.php');
}

//supprimer capteur
if((!empty($_POST['piececapteur'] AND !empty($_POST['capteursuppr'])))) {
    $piece = $_POST['piececapteur'];
    $capteur = $_POST['capteursuppr'];
    deleteCapteur($piece, $capteur);
    header ('Location: ../VUE/creer_ma_maison.php');
}

//supprimer actionneur
if((!empty($_POST['pieceactionneur'] AND !empty($_POST['actionneursuppr'])))){
    $piece = $_POST['pieceactionneur'];
    $actionneur = $_POST['actionneursuppr'];
    deleteActionneur($piece,$actionneur);
    header ('Location: ../VUE/creer_ma_maison.php');

}






/*

$req = $bdd->prepare('DELETE FROM `pieces` WHERE `nom` = ''$newPiece1''');
$req->execute(array(
    'nompiece' => $newPiece1));

DELETE FROM `utilisateur`
WHERE `id` = 1



$req = $bdd->prepare('INSERT INTO capteurpiece(idpiece ,  typecapteur ) VALUES(:nompiece , :typecapteur )');
$req->execute(array(
    'typecapteur' => $typecapteur1,
    'nompiece' => $piececapt1));

$req = $bdd->prepare('INSERT INTO actionneurpiece(idpiece ,  typeactionneur ) VALUES(:nompiece , :typeactionneur )');
$req->execute(array(
    'typeactionneur' => $typeactionneur1,
    'nompiece' => $pieceactio1));

*/



?>

