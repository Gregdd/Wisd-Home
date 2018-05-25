<?php session_start();
?>
<html>

<head>
	
    <meta charset="utf-8" />
    <title>Modifier profil</title>
    <link rel="stylesheet" href="Profil.css" />
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</head>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;port=8889;dbname=wisdhome;charset=utf8','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); #mettre le port 8889
}
catch(Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$userid = $_SESSION['ID'];

$mdp = $bdd->prepare('SELECT Mot_de_passe FROM connexion WHERE pseudo = ?') or die(print_r($bdd->errorInfo()));
$mdp->execute(array($userid));

if(!empty($_POST('amdp')) AND $_POST('amdp')==$mdp ){
	if(!empty($_POST('nmdp')) ){
		if(!empty($_POST('cmdp')) AND $_POST('cmdp')==$_POST('ndmp')){
			$newmdp = $_POST('ndmp');
			$req= $bdd -> prepare('UPDATE connexion SET Mot_de_passe =:newmdp WHERE pseudo = :ID');
			$req->execute(array(
					'newmdp' => $newmdp,
					'ID' => $userid
			));
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
	</html>
