<?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisdhome;charset=utf8', "root", "root");
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}




$reponse = $bdd->query('SELECT * FROM faq ORDER BY ID ASC');
// Affichage de ces informations dans un tableau
echo "<table border=1>
			<tr>
				<th> <strong>Questions</strong> </th>
				<th> <strong>Réponses</strong> </th>
			</tr>
			";

while ($donnees = $reponse->fetch())
{
    echo "
				<tr>
					<td>".$donnees["question"]. "</td>
					<td>".$donnees["reponse"]."</td>
			     </tr>
			     	";
}
echo "</table>";
?>