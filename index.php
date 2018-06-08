<?php
session_start();


// Sélection du contrôleur
if(!isset($_SESSION["pseudo"])){ // L'utilisateur n'est pas connecté
    require("Vue/Accueil_1.php");
} else {
    include("Controleur/connexion_post.php");
}
?>
