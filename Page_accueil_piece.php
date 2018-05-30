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

    <h2> Capteurs  </h2><hr>
    <?php

    $id = $_GET["ideal"];

    $req = $bdd->query("SELECT typecapteur FROM capteurpiece WHERE idpiece='$id'  ");
    echo '<ul>';
    while ($capteur = $req->fetch())
    {
        $type = &$capteur['typecapteur'];
        //var_dump($type);
        $req1 = $bdd->prepare("SELECT url_img FROM capteur WHERE capteurtype =?");
        $req1 -> execute(array($type));
        $image = $req1->fetch();
        $url_img = $image["url_img"];
        //var_dump();
        echo '<li class="carre">
            <p style="color: black" class="titre">'.$capteur['typecapteur'].'</p>
            <img src='.$url_img.' style="width:"  title='.$capteur['typecapteur'].' class="pics"/><br/>

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

    $req = $bdd->query("SELECT typeactionneur,ID FROM actionneurpiece WHERE idpiece='$id' ");
    echo '<ul>';
    while ($actionneur = $req->fetch())
    {
        $type = &$actionneur['typeactionneur'];
        $req1 = $bdd->prepare("SELECT url_img FROM actionneur WHERE actionneurtype =?");
        $req1 -> execute(array($type));
        $image = $req1->fetch();
        $url_img = $image["url_img"];
        //var_dump();
        echo '<a class="carre">
            <a href="Page_acceuil_piece_actionneur.php?ideal1='.$actionneur['ID'].'>
            <p style="color: black" class="titre">'.$actionneur['typeactionneur'].'</p></a>
            <img src='.$url_img.' style="width:"  title='.$actionneur['typeactionneur'].' class="pics"/><br/>

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