<?php

include 'database.php';
include '../MODELE/fonctionSQL.php';

$entrees = getInfoCapteur();

while ($ligne = $entrees -> fetch()){
    echo ("
    <tr>
        <td>".$ligne['capteurNom']."</td>
        <td>".$ligne['stock']."</td>
    </tr>
    ");
}

?>
