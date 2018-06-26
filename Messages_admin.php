<?php
session_start();
$q = $_GET["q"];
require 'database.php';
require 'Header_admin.php';
if ($q=="Lu"){
	$req = $bdd->query('SELECT * FROM messagerie WHERE Statut="1" ORDER BY id_message DESC');
}
elseif ($q=="nonLu"){
	$req = $bdd->query('SELECT * FROM messagerie WHERE Statut="0" ORDER BY id_message DESC');
}
else if($q==all){
	$req = $bdd->query('SELECT * FROM messagerie ORDER BY id_message DESC');
}
echo "<table border='1'>
<tr>
<th>Numéro message</th>
<th>Objet</h>
<th>Pseudo</th>
<th>Message</th>
<th>Date message</th>
<th>Marquer comme traité</th>
</tr>";
$i=0;
while ($donnees = $req->fetch()){
	echo "<tr>";
	echo "<td>" . $donnees['id_message'] . "</td>";
	echo "<td>" . htmlspecialchars($donnees['Objet']) . "</td>";
	echo "<td>" . $donnees['ID'] . "</td>";
	echo "<td>" . htmlspecialchars($donnees['Message']) . "</td>";
	echo "<td>" . $donnees['Date_Message'] . "</td>";
	echo "<td><a target='_blank' href='Messages_admin_traiter.php?id=".$donnees['id_message']."'>[x]</a>";
	$i++;
}
echo "</table>";

mysqli_close($donnees);
?>
