<?php

include 'database.php';
include '../MODELE/fonctionSQL.php';

$entrees = getMessage();

while ($ligne = $entrees -> fetch()){
    echo ("
    <tr>
        <td>".$ligne['Date_Message']."</td>
        <td>".$ligne['ID']."</td>
        <td>".$ligne['Objet']."</td>
        <td>".$ligne['Message']."</td>
    </tr>
    ");
}
?>
