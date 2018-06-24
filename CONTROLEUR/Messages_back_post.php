<?php
session_start();
include 'database.php';

$objet = $_POST['objet'];
$message = $_POST['message'];
//$id = $_SESSION['ID'];
$date = date("Y-m-d H:i:s");
include 'fonctionSQL.php';

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
