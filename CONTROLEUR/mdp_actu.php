<?php session_start();
?>

<?php

include 'database.php';
include '../MODELE/fonctionSQL.php';

$userid = $_SESSION['ID'];

$mdp = getMdp($userid);

if(!empty($_POST['amdp']) AND $_POST['amdp']==$mdp['Mot_de_passe']){
	if(!empty($_POST['nmdp']) ){
		if(!empty($_POST['cmdp']) AND $_POST['cmdp']==$_POST['nmdp']){
			$newmdp = $_POST['nmdp'];
			majProfil('Mot_de_passe',$newmdp,$userid);
			echo 'Le mot de passe a bien été modifié.';
		}
		else{
			echo 'Erreur : Les mots de passe ne correspondent pas.';
		}
	}
}
else{
	echo 'Mot de passe incorrect.';
}
?>
