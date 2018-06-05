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
    <link rel="stylesheet" type="text/css" href="Page_accueil_capteur.css">
    <link rel="stylesheet" type="text/css" href="style_tableau.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="" />

</head>



<body>
<header>
    <?php include 'Header_2.php';?>
</header>

<article>
    <span> <h2 style="display: inline-block"> Choix   piece    </h2>  <a href="Creer_ma_maison.php" ><img style="display: inline ; position: relative; left:250px ; top 20px" src="Image/boutonplus.png"> </a><hr> </span>
    <?php

    $req = $bdd->query('SELECT idpiece,nom, superficie FROM pieces');
    echo '<ul>';
    while ($piece = $req->fetch())
    {
        echo '<li  class="carre">
            <a style="font-size: large" href="Page_accueil_piece.php?ideal='.$piece['idpiece'].'>
            <p class="titre"> '.$piece['nom'].' </p></a>
        </li> ';
    }
    echo '</ul>';

    // $req->closeCursor();

    ?>

</article>

<footer>
    <?php include 'Footer.php';?>
</footer>

</html>