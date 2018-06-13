<?php
//CONTROLEUR
	function affichageFAQ(){

        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=wisdhome;charset=utf8', "root", "root");
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }


        $reponse = $bdd->query('SELECT * FROM faq ORDER BY ID ASC'); // récupération des questions
// Affichage de ces informations dans un tableau
		echo "<table border=1>
			<tr>
				<th> <strong>ID</strong> </th>
				<th> <strong>Question</strong> </th>
				<th> <strong>Réponse</strong> </th>
			</tr>
		";

		while ($donnees = $reponse->fetch())
		{
			echo "
				<tr>
					<td>".$donnees["ID"]. "</td>
					<td>".$donnees["question"]. "</td>
					<td>".$donnees["reponse"]."</td>
				</tr>
			";
		}

		echo "</table>";
	}
?>
