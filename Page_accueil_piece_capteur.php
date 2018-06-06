<!DOCTYPE html>
<?php
include 'database.php';
?>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Catalogue</title>
    <link rel="stylesheet" type="text/css" href="Page_accueil_capteur.css">
    <link rel="stylesheet" type="text/css" href="style_tableau.css">
    <link rel="stylesheet" type="text/css" href="popupbox.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="Image/logo.png" />

</head>
<body>
<header>
    <?php include 'Header_2.php';?>
</header>


<article>

    <?php
    $id2 = $_GET["ideal2"];

    $reqtype = $bdd->query("SELECT typecapteur FROM capteurpiece WHERE ID='$id2' ");
    $type = $reqtype->fetch();
    $type1=$type['typecapteur'];
    $reqtype->closeCursor();

    $reqnom = $bdd->query("SELECT  p.nom  FROM pieces p INNER JOIN capteurpiece j ON j.idpiece = p.idpiece WHERE j.ID='$id2' ");
    $nom = $reqnom->fetch();
    $nom1=$nom['nom'];

    $reqval = $bdd->query("SELECT valeur FROM capteurpiece WHERE ID='$id2' ");
    $val = $reqval->fetch();
    $val1=$val['valeur'];
    $reqval->closeCursor();

    $requnit = $bdd->query("SELECT  p.unit  FROM capteur p INNER JOIN capteurpiece j ON j.typecapteur = p.capteurtype WHERE j.ID='$id2' ");
    $unit = $requnit->fetch();
    $unit1=$unit['unit'];

    $req1 = $bdd->prepare("SELECT url_img FROM capteur WHERE capteurtype =?");
    $req1 -> execute(array($type1));
    $image = $req1->fetch();
    $url_img = $image["url_img"];





    ?>

    <h2 style="text-align: center">  Capteur: <?php echo$type1 ?><?php echo "<br>"?>     Pièce: <?php echo$nom1?> </h2><hr>
    <br>
    <div >
        <img  src="<?php echo $url_img ?>" style=" width:100px;height:100px;; display: inline-block; margin-right: 300px; margin-left: 100px; margin-bottom: 20px"  >
        <h3 style=" display: inline-block; margin-right: 100px"><?php echo"Valeur actuelle   :" ?></h3>

        <h3 style=" display: inline-block; margin-right: 100px"><?php echo"$val1 " ; echo"$unit1"?></h3>








</article>





<footer>
    <?php include 'Footer.php';?>
</footer>
</body>
</html>
