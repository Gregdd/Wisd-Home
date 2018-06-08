<!DOCTYPE html>
<?php

include 'database.php';
?>

<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Refresh" content="3">
    <title>Catalogue</title>
    <link rel="stylesheet" type="text/css" href="Page_acceuil_capteur.css">
    <link rel="stylesheet" type="text/css" href="styletableau.css">
    <link rel="stylesheet" type="text/css" href="popupbox.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="Image/logo.png" />

</head>
<body>
<header>
    <?php include('Access_denied.php');?>
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

    $requnit = $bdd->query("SELECT  p.unit  FROM actionneur p INNER JOIN actionneurpiece j ON j.typeactionneur = p.actionneurtype WHERE j.ID='$id1' ");
    $unit = $requnit->fetch();
    $unit1=$unit['unit'];

    //$valeursouhaitee=$_POST['valeursouhaitee'];

    $req1 = $bdd->prepare("SELECT url_img FROM actionneur WHERE actionneurtype =?");
    $req1 -> execute(array($type1));
    $image = $req1->fetch();
    $url_img = $image["url_img"];

    if(!empty($_POST['valeursouhaitee'])) {
        $reqval1 = $bdd->prepare('UPDATE  actionneurpiece SET valeur= ?  WHERE ID = ?');
        $reqval1 -> execute(array($_POST['valeursouhaitee'], $id1));
        $reqval1->closeCursor();

    }

    ?>


    <h2 style="text-align: center">  Actionneur: <?php echo"$type1"?><?php echo "<br>"?>     Pièce: <?php echo"$nom1"?> </h2><hr>
    <br>
    <div >

        <img  src="<?php echo$url_img ?>" style=" width:100px;height:100px;; display: inline-block; margin-right: 300px; margin-left: 100px; margin-bottom: 20px"  >
        <h3 style=" display: inline-block; margin-right: 100px"><?php echo"Valeur actuelle   :" ?></h3>

        <h3 style=" display: inline-block; margin-right: 100px"><?php echo"$val1 " ;echo"    "; echo"($unit1)"?></h3>

        <form id ="myform"name="formulaire" onsubmit="return Test()" method="post" action="Page_acceuil_piece_actionneur.php?ideal1=4 " >
            <input style=" color:black; margin-right: 100px ; background-color: #5b9630" type="text" name="valeursouhaitee" placeholder="Valeur souhaitée" />
            <input style="background-color: #4CAF50" id ="sub" type="submit" value="envoyer">
            <a href="javascript: window.refresh();">actualiser</a>
        </form>
    </div>



</article>
<script>
    function Test(){
        var choix=formulaire.valeursouhaitee.value;
        if (!choix){
            alert(" Veuillez indiquer la valeur souhaitée !!");
            return false;
            formulaire.choix.focus();
        }



    }
</script>




<footer>
    <?php include 'Footer.php';?>
</footer>
</body>
</html>
