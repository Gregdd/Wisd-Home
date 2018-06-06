<?php

include 'database.php';


// Vérification de la validité des informations
if ((!empty($_POST['nompiece'])) ) {
    $nompiece = $_POST['nompiece'];

}
if((!empty($_POST['piececapt'] AND !empty($_POST['typecapteur'])))){
    $piececapt = $_POST['piececapt'];
    $typecapteur = $_POST['typecapteur'];
}
if((!empty($_POST['pieceactio'] AND !empty($_POST['typeactionneur'])))){
    $pieceactio = $_POST['pieceactio'];
    $typeactionneur = $_POST['typeactionneur'];
}



// Insertion

$pseudo_Exist = $bdd->prepare("SELECT nom FROM pieces WHERE nom = :nompiece");
//On recupère les pseudo de t'as base ou les pseudo son egal au pseudo passer par le formulaire
$pseudo_Exist->bindValue('nompiece', $nompiece, PDO::PARAM_STR);
$pseudo_Exist->execute();
//on exécute la requête
$pseudoINbdd = $pseudo_Exist->rowCount();
//Rowcount permet de sortir le nombre de valeur que t'as requête renvoi, que l'on rentre dans la variable pseudoINbdd (ou autre )

if($pseudoINbdd == 0){
    //Si la requête renvoi 0, le pseudo n'existe pas dans la base, sinon le pseudo existe.
    $req = $bdd->prepare('INSERT INTO pieces(nom ) VALUES(:nompiece)');
    $req->execute(array(
        'nompiece' => $nompiece));
    header ('Location:Page_acceuil_capteurs.php');



}

$req = $bdd->prepare('INSERT INTO capteurpiece(idpiece ,  typecapteur ) VALUES(:nompiece , :typecapteur )');
$req->execute(array(
    'typecapteur' => $typecapteur,
    'nompiece' => $piececapt));


$req = $bdd->prepare('INSERT INTO actionneurpiece(idpiece ,  typeactionneur ) VALUES(:nompiece , :typeactionneur )');
$req->execute(array(
    'typeactionneur' => $typeactionneur,
    'nompiece' => $pieceactio));


//supprimer

if ((!empty($_POST['nompiece1'])) ) {
    $nompiece1 = $_POST['nompiece1'];
    $reqsupp = $bdd->query("DELETE FROM pieces WHERE nom = '".$_POST['nompiece1']."'");

    header ('Location:Page_acceuil_capteurs.php');


}
if((!empty($_POST['piececapt1'] AND !empty($_POST['typecapteur1'])))){
    $piececapt1 = $_POST['piececapt1'];
    $typecapteur1 = $_POST['typecapteur1'];
    $reqsupp = $bdd->query("DELETE FROM capteurpiece WHERE idpiece = '".$_POST['piececapt1']."' AND typecapteur= '".$_POST['typecapteur1']."' ");

    header ('Location:Page_acceuil_capteurs.php');


}
if((!empty($_POST['pieceactio1'] AND !empty($_POST['typeactionneur1'])))){
    $pieceactio1 = $_POST['pieceactio1'];
    $typeactionneur1 = $_POST['typeactionneur1'];
    $reqsupp = $bdd->query("DELETE FROM actionneurpiece WHERE idpiece = '".$_POST['pieceactio1']."' AND typecapteur= '".$_POST['typeactionneur1']."' ");

    header ('Location:Page_acceuil_capteurs.php');

}






/*

$req = $bdd->prepare('DELETE FROM `pieces` WHERE `nom` = ''$nompiece1''');
$req->execute(array(
    'nompiece' => $nompiece1));

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

