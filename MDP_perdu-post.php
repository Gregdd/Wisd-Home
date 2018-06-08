<?php

include 'database.php';
session_start();
$pseudo = $_POST['pseudo'];
if(isset($_POST['pseudo'])){

	$reponse = $bdd->prepare('SELECT Reponse FROM utilisateur WHERE pseudo=?');
	$reponse->execute(array(
		$pseudo
	)
);
$reponse=$reponse->fetch();
$question = $bdd->prepare('SELECT question FROM utilisateur WHERE pseudo=?');
$question->execute(array(
	$pseudo
)
);
$question=$question->fetch();
$question=$question[0];
}

if(!empty($_POST['reponse'])){
$rep=$_POST['reponse'];
if($rep==$reponse[0] AND $_POST['pass']==$_POST['confirm_pass']){
	$newpass = $_POST['pass'];
	$req= $bdd -> prepare('UPDATE utilisateur SET Mot_de_passe =:newmdp WHERE pseudo = :pseudo');
	$req->execute(array(
		'newmdp' => $newpass,
		'pseudo' => $pseudo
	));
	include('Connexion.php');
}
else{
	include('MDP_perdu2.php');
}
}
else{
	include('MDP_perdu2.php');
}
?>
