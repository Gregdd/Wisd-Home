<?php
session_start();
if (isset ($_SESSION['pseudo']))
{
    setcookie('pseudo', '', -1);
}
session_destroy();
    echo 'Vous êtes à présent déconnecté <br/> Pour revenir a l\'accueil, cliquez <a href="../VUE/Accueil_1.php">ici</a>';
?>
