<!DOCTYPE html>
<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisdhome', 'root', 'root');
}catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Catalogue</title>
    <link rel="stylesheet" type="text/css" href="Page_acceuil_capteur.css">
    <link rel="stylesheet" type="text/css" href="styletableau.css">
    <link rel="stylesheet" type="text/css" href="popupbox.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="Image/icon.png" />

</head>
<body>
<header>
    <?php include 'Header_2.php';?>
</header>


<article>

    <?php
    $id1 = $_GET["ideal1"];

    $reqtype = $bdd->query("SELECT typeactionneur FROM actionneurpiece WHERE ID='$id1' ");
    $type = $reqtype->fetch();
    $type1=$type['typeactionneur'];
    $reqtype->closeCursor();

    $reqnom = $bdd->query("SELECT  p.nom  FROM pieces p INNER JOIN actionneurpiece j ON j.idpiece = p.idpiece WHERE j.ID='$id1' ");
    $nom = $reqnom->fetch();
    $nom1=$nom['nom'];

    $reqval = $bdd->query("SELECT valeur FROM actionneurpiece WHERE ID='$id1' ");
    $val = $reqval->fetch();
    $val1=$val['valeur'];
    $reqval->closeCursor();


    ?>

    <h2 style="text-align: center">  Actionneur: <?php echo"$type1"?><?php echo "<br>"?>     Pièce: <?php echo"$nom1"?> </h2><hr>
    <br>
    <div >
        <img  src="" style=" width:100px;height:100px;; display: inline-block; margin-right: 300px; margin-left: 100px; margin-bottom: 20px"  >
        <h3 style=" display: inline-block; margin-right: 100px"><?php echo"$val1"?></h3>

        <form style="display: inline-block">
            <input style="margin-right: 100px" type="text" name="Valeur souhaitée" placeholder="Valeur souhaitée" />
            <input type="button" value="envoyer">
        </form>
    </div>

    <?php

    ?>

</article>





<footer>
    <?php include 'Footer.php';?>
</footer>
</body>
</html>