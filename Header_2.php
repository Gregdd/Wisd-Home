<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" href="Header_2.css" />
<?php session_start();?>
<header>

    <ol class = ol2>
        <li class = li2><?php echo $_SESSION['prenom'].' '. $_SESSION['nom']?></li>
        <li class = li2><a class = a2 href="Deconnexion.php">Deconnexion</a></li>
    </ol>

    <div class=logo>
        <a href="Accueil_2.php"><img src="logo.png" id="logo_Header2" width="200" alt="Wisd'Home"/></a>
    </div>

    <ul class = ul2>
        <li class = li2><a class = a2 id = Profil href="Profil.php">Mon profil</a></li>
        <li class = li2><a class = a2 id = Capteurs href="Page_accueil_capteurs.php">My Home</a></li>
        <li class = li2><a class = a2 id = Capteurs2 href="creer_ma_maison.php">Gérer ma maison</a></li>
        <li class = li2><a class = a2 id = Conso href="Consommation.php">Ma consommation</a></li>
        <li class = li2><a class = a2 id = Messagerie href="Messagerie.php">Nous contacter </a></li>
    </ul>
    
</header>

</html>
