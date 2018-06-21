<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/Header_admin.css" />
<?php session_start();?>
<header>

    <ol class = ol2>
        <li class = li2><?php echo $_SESSION['prenom'].' '. $_SESSION['nom']?></li>
        <li class = li2><a class = a2 href="../CONTROLEUR/Deconnexion.php">Deconnexion</a></li>
    </ol>

    <div class=logo>
        <a href="Accueil_admin.php"><img src="img/logo.png" id="logo_Header2" width="200" alt="Wisd'Home"/></a>
    </div>

    <ul class = ul2>
        <li class = li2><a class = a2 id = Recherche href="../Rechercher_un_client.php">Rechercher un client</a></li>
        <li class = li2><a class = a2 id = Stock href="../stock.php">Stock capteurs</a></li>
        <li class = li2><a class = a2 id = NewCapt href="../new_capteur.php">Nouveau capteur</a></li>
        <li class = li2><a class = a2 id = Messagerie href="../Messages_admin.php">Messagerie</a></li>
        <li class = li2><a class = a2 id = Messagerie href="../Messagerie_back_admin.php">FAQ</a></li>

    </ul>
</header>

</html>
