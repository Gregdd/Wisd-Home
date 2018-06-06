<?php

include 'database.php';
$pseudo = $_POST['pseudo'];
$reponse = $bdd->query('SELECT Reponse FROM utilisateur WHERE pseudo LIKE "$pseudo"');
$question = $bdd->query('SELECT question FROM utilisateur WHERE pseudo LIKE "$pseudo"');


if(!empty($_POST['reponse']) AND $_POST['reponse']==$pseudo['reponse']){
			$newmdp = $_POST['nmdp'];
			$req= $bdd -> prepare('UPDATE utilisateur SET Mot_de_passe =:newmdp WHERE pseudo = :ID');
			$req->execute(array(
					'newmdp' => $newmdp,
					'ID' => $userid
			));}
      header ('Location:MDP_perdu2.php');


?>
