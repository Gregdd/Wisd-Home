<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
}catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


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
$req = $bdd->prepare('INSERT INTO pieces(nom ) VALUES(:nompiece)');
$req->execute(array(
    'nompiece' => $nompiece));



$req = $bdd->prepare('INSERT INTO capteurpiece(idpiece ,  typecapteur ) VALUES(:nompiece , :typecapteur )');
$req->execute(array(
    'typecapteur' => $typecapteur,
    'nompiece' => $piececapt));

/*$req = $bdd->prepare('INSERT INTO actionneurpiece(piece ,  typeactionneur ) VALUES(:nompiece , :typeactionneur )');
$req->execute(array(
    'typeactionneur' => $typecapteur,
    'nompiece' => $piececapt));

*/

header ('Location:Page_acceuil_capteur.php');


?>
