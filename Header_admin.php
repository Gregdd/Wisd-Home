<!DOCTYPE html>
<html>

<link rel="stylesheet" href="Header_admin.css" />
<?php session_start(); ?>
<header>

    <ol class = ol2>
        <li class = li2><?php echo $_SESSION['nom'].' '.$_SESSION['prenom']?></li>
        <li class = li2><a class = a2 href="Accueil_1.php">Déconnexion</a></li>
    </ol>

    <div>
        <a href="accueil_admin.php"><img src="logo.png" class=logo /></a>
    </div>


</header>

</html>
