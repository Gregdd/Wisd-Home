<?php
include ('../MODELE/fonctionSQL.php');

$req = getInfoPiece($_SESSION['ID']);


while ($piece = $req->fetch())
{
    echo ('
        <li  class="carre">
            <a class = "lien" href="../Page_accueil_piece.php?ideal=.$piece[0]."> '.$piece[1].' </a>
        </li> 
    ');
}


?>
