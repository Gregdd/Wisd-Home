<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" href="/Wisd-Home-master/VUE/css/Header_2.css" />
<?php session_start();?>
<header>

    <ol class = ol2>
        <li class = li2><?php echo $_SESSION['prenom'].' '. $_SESSION['nom']?></li>
        <li class = li2><a class = a2 href="../CONTROLEUR/Deconnexion.php">Deconnexion</a></li>
    </ol>

    <div class=logo>
        <a href="../VUE/Accueil_2.php"><img src="/Wisd-Home-master/VUE/img/logo.png" id="logo_Header2" width="200" alt="Wisd'Home"/></a>
    </div>

    <ul class = ul2>
        <li class = li2><a class = a2 id = Profil href="/Wisd-Home-master/VUE/Profil.php">Mon profil</a></li>
        <li class = li2><a class = a2 id = Capteurs href="/Wisd-Home-master/VUE/MyHome.php">My Home</a></li>
        <li class = li2><a class = a2 id = Capteurs2 href="/Wisd-Home-master/VUE/creer_ma_maison.php">Gérer ma maison</a></li>
        <li class = li2><a class = a2 id = Conso href="/Wisd-Home-master/VUE/Consommation.php">Ma consommation</a></li>
        <li class = li2><a class = a2 id = Messagerie href="Messagerie.php">Nous contacter </a></li>
    </ul>
    
</header>

</html>
