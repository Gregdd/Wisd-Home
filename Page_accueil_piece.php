<!DOCTYPE html>
<?php

include 'database.php';

<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Catalogue</title>
    <link rel="stylesheet" type="text/css" href="Page_acceuil_capteur.css">
    <link rel="stylesheet" type="text/css" href="style_tableau.css">
    <link rel="stylesheet" type="text/css" href="popupbox.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="Image/icon.png" />

</head>
<body>
<header>
    <?php include 'Header_2.php';?>
</header>

<div>
	<a class="colors" href="creer_ma_maison.php"><input type="submit" value="Modifier"/></a>
</div>

<article>

    <h2> Capteurs  </h2><hr>
    <?php

    $id = $_GET["ideal"];

    $req = $bdd->query("SELECT typecapteur FROM capteurpiece WHERE idpiece='$id'  ");
    echo '<ul>';
    while ($capteur = $req->fetch())
    {
        $capteur['typecapteur']= &$type;
        $image = $bdd->query("SELECT url_img FROM capteur WHERE typecapteur =$type");
        //$req = $bdd->query("SELECT url_img FROM capteur WHERE capteurtype = '.$capteur['typecapteur'].'z ");
        echo '<li class="carre">
            <a href="">
            <center><img src=".$image." class="pics" style="width:20px"/></center><br/>
            <img src="Image/mouvement.png" style="width:"  title='.$capteur['typecapteur'].' class="pics"/><br/>

                <p class="titre">'.$capteur['typecapteur'].'</p></a>
        </li> ';
    }
    echo '</ul>';

    $req->closeCursor();

    ?>





</article>


<article>

    <h2> Actionneurs </h2><hr>
    <?php

    $id = $_GET["ideal"];

    $req = $bdd->query("SELECT typeactionneur FROM actionneurpiece WHERE idpiece='$id' ");
    echo '<ul>';
    while ($actionneur = $req->fetch())
    {
        echo '<li class="carre">
            <a href="">
            <center><img src="" class="pics" style="width:20px"/></center><br/>
                <p class="titre">'.$actionneur['typeactionneur'].'</p></a>
                

                
              
        </li> ';
    }
    echo '</ul>';

    $req->closeCursor();

    ?>





</article>



<footer>
    <?php include 'Footer.php';?>
</footer>
</body>
</html>
