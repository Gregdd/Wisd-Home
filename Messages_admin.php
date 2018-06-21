<?php
session_start();

require 'database.php';
require 'Header_admin.php';
$statut = $_SESSION['Statut'];


$req = $bdd->query('SELECT * FROM messagerie ORDER BY id_message DESC');

echo "<table border='1'>
<tr>
<th>Numéro message</th>
<th>Objet</h>
<th>Pseudo</th>
<th>Message</th>
<th>Date message</th>
</tr>";


while ($donnees = $req->fetch()){
        echo "<tr>";
        echo "<td>" . $donnees['id_message'] . "</td>";
        echo "<td>" . $donnees['Objet'] . "</td>";
        echo "<td>" . $donnees['ID'] . "</td>";
        echo "<td>" . $donnees['Message'] . "</td>";
        echo "<td>" . $donnees['Date_Message'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
 

mysqli_close($donnees);

require 'Footer.php';
?>