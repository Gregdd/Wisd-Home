<!DOCTYPE html>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisd\'home', 'root', 'root');
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
    <link rel="icon" type="image/png" href="Image/icon.png" />

</head>



<body>
<header>
    <?php include 'Header_2.php';?>
</header>

<article>
    <h2>Choix de la pièce</h2>
    <?php
    $req = $bdd->query('SELECT idpiece,nom, superficie FROM pieces');
    echo '<ul class = "ul4">';
    while ($piece = $req->fetch())
    {
        echo '<li class="carre">
            <a class="a4" href="Page_accueil_pièces.php?ideal='.$piece['idpiece'].'/>
            <p class="titre"> '.$piece['nom'].' </p></a>
        </li> ';
    }
    echo '</ul>';
    $req->closeCursor();
    ?>

</article>

<footer>
    <?php include 'Footer.php';?>
</footer>

</html>
