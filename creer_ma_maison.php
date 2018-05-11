<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
}catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


// Vérification de la validité des informations
if ((!empty($_POST['nompiece']) /*&& !empty($_POST['typecapteur'])) OR (!empty($_POST['nompiece']) && !empty($_POST['typeactionneur'])*/) ) {
    $nompiece = $_POST['nompiece'];
    $typecapteur = $_POST['typecapteur'];
    $typeactionneur = $_POST['typeactionneur'];
}


// Insertion
$req = $bdd->prepare('INSERT INTO pieces(nom ) VALUES(:nompiece)');
$req->execute(array(
    'nompiece' => $nompiece));


header ('Location:Page_acceuil_capteur.php');


?>

