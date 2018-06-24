<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" href="/Wisd-Home-master/VUE/css/Header_admin.css" />
<?php session_start();?>

<header>

    <ol class = ol2>
        <li class = li2><?php echo $_SESSION['prenom'].' '.$_SESSION['nom']?></li>
        <li class = li2><a class = a2 href="/Wisd-Home-master/CONTROLEUR/Deconnexion2.php">Déconnexion</a></li>
    </ol>

    <div class=logo>
        <a href="/Wisd-Home-master/VUE/Accueil_admin.php"><img src="/Wisd-Home-master/VUE/img/logo.png" id="logo_Header2" width="200" alt="Wisd'Home"/></a>
    </div>


</header>

</html>
