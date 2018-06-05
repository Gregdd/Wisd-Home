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

    <span> <h2 style="display: inline-block"> Capteurs  </h2>  <a href="Creer_ma_maison.php" ><img style="display: inline ; position: relative; left:250px ; top 20px" src="Image/boutonplus.png"> </a><hr> </span>
    <?php

    $id = $_GET["ideal"];

    $req = $bdd->query("SELECT typecapteur,ID FROM capteurpiece WHERE idpiece='$id'  ");
    echo '<ul>';
    while ($capteur = $req->fetch())
    {
        $type = &$capteur['typecapteur'];
        $req1 = $bdd->prepare("SELECT url_img FROM capteur WHERE capteurtype =?");
        $req1 -> execute(array($type));
        $image = $req1->fetch();
        $url_img = $image["url_img"];
        echo '<li  class="carre">
            <a   href="Page_accueil_piece_capteur.php?ideal2='.$capteur['ID'].'><p  class="titre">'.$capteur['typecapteur'].'</p></a>
             <img src='.$image["url_img"].' style="width:"  title='.$capteur['typeactionneur'].' class="pics"/><br/>

        </li> ';
    }
    echo '</ul>';

    $req->closeCursor();

    ?>





</article>


<article>

    <span> <h2 style="display: inline-block"> Actionneurs   </h2>  <a href="Creer_ma_maison.php" ><img style="display: inline ; position: relative; left:250px ; top 20px" src="Image/boutonplus.png"> </a><hr> </span>
    <?php

    $id = $_GET["ideal"];

    $req2 = $bdd->query("SELECT typeactionneur,ID FROM actionneurpiece WHERE idpiece='$id' ");
    echo '<ul>';
    while ($actionneur = $req2->fetch())
    {
        $type = &$actionneur['typeactionneur'];
        $req1 = $bdd->prepare("SELECT url_img FROM actionneur WHERE actionneurtype =?");
        $req1 -> execute(array($type));
        $image1 = $req1->fetch();
        $url_img = $image1["url_img"];
        echo '<li class="carre">
            <a href="Page_acceuil_piece_actionneur.php?ideal1='.$actionneur['ID'].'><p  class="titre">'.$actionneur['typeactionneur'].'</p></a>
             <img src='.$image1["url_img"].' style="width:"  title='.$actionneur['typeactionneur'].' class="pics"/><br/>

        </li> ';
    }
    echo '</ul>';

    $req2->closeCursor();

    ?>





</article>



<footer>
    <?php include 'Footer.php';?>
</footer>
</body>
</html>
