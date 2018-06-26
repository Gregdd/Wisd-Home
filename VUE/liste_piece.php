<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/liste_piece.css">
</head>


<body>

<?php
include 'header_2.php';
include '../CONTROLEUR/Access_denied.php';
include '../CONTROLEUR/liste_piece_contenu.php';
?>

<main>

    <div>
        <h2> Capteurs de la pièce  </h2>

        <ul class = "ul1">
            <?php afficher_capteur();?>
            <li class="carre"><a class="lien" href="creer_ma_maison.php" ><img class = "image" src="img/boutonplus.png"> </a></li>
        </ul>

    </div>

    <div>
        <h2> Actionneurs de la pièce </h2>

        <ul class="ul1">
            <?php afficher_actionneur();?>
            <li class="carre"><a class="lien" href="creer_ma_maison.php" ><img class = "image" src="img/boutonplus.png"> </a></li>
        </ul>
    </div>

</main>

<?php include 'footer.php';?>

</body>
</html>