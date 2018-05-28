<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" href="Header_2.css" />
<?php session_start();?>
<header>

    <ol class = ol2>
        <li class = li2><?php echo $_SESSION['prenom'].' '. $_SESSION['nom']?></li>
        <li class = li2><a class = a2 href="Déconnexion.php">Deconnexion</a></li>
    </ol>

    <div class=logo>
        <a href="Accueil_admin.php"><img src="images/logo2.png" id="logo_Header2" width="200" alt="Wisd'Home"/></a>
    </div>

    <ul class = ul2>
        <li class = li2><a class = a2 id = Profil href="Rechercher_un_client.php">Rechercher un client</a></li>
        <li class = li2><a class = a2 id = Capteurs href="Stock_capteur.php">Stock capteurs</a></li>
        <li class = li2><a class = a2 id = Conso href="Nouveau_capteur.php">Nouveau capteur</a></li>
        <li class = li2><a class = a2 id = Messagerie href="Messagerie2.php">Messagerie</a></li>

    </ul>
</header>

</html>
