<?php
session_start();

if (isset ($_SESSION['identifiant']))
{
    setcookie('identifiant', '', -1);
}
session_destroy();
echo '<p>Vous êtes à présent déconnecté <br />';

?>
