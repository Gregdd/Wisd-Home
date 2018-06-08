<?php
session_start();
if (isset ($_SESSION['pseudo']))
{
    setcookie('pseudo', '', -1);
}
session_destroy();
echo '<p>Vous êtes à présent déconnecté <br />';
?>
