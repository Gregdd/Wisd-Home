<?php
session_start();
if (isset ($_SESSION['pseudo']))
{
    setcookie('pseudo', '', -1);
}
session_destroy();
header ('Location: ../VUE/Deconnexion.php');
?>
