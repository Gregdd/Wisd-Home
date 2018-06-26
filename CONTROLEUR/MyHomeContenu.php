<?php
include ('../MODELE/fonctionSQL.php');

$req = getInfoPiece($_SESSION['pseudo']);


while ($piece = $req->fetch())
{
    echo ('
        <li  class="carre">
            <a class = "lien" href="../VUE/liste_piece.php?ideal='.$piece[0].'"> '.$piece[1].' </a>
        </li> 
    ');
}


?>
