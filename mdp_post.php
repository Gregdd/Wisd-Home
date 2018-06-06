<?php
$header="MIME-Version: 1.0\r\n";
$header.='From:"gmail.com"<support@gmail.com>'."\n";
$header.='Content-Type:text/html; charset=utf-8'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
        <body>
            <div align="center">
                    Veuillez appuyer sur le lien, pour changer de mot de passe :
                    <a href="http://localhost:63342/Wisd-Home/modif_mdp.php"> changervotremotdepasse</a>
            </div>
        </body>
</html>

';
mail($_POST['mail'] , "Changement de mot de passe", $message, $header);


?>

