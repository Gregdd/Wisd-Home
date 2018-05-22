<?php session_start();
?>
<html>

<head>
	
    <meta charset="utf-8" />
    <title>Modifier profil</title>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</head>
<?php
	$userid = $_SESSION['ID'];
	try
	{
		$bdd = new PDO('mysql:host=localhost;port=8889;dbname=wisdhome;charset=utf8','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); #mettre le port 8889
	}
	catch(Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	
	if(isset($_POST['nom'])){
		$newnom = $_POST['nom'];
		$req = $bdd->prepare('UPDATE connexion SET nom=:newnom WHERE pseudo =\'userid\'');
		$req->execute(array('newnom' => $newnom));
	}
	if(isset($_POST['prenom'])){
		$newprenom = $_POST['prenom'];
		$req = $bdd->prepare('UPDATE connexion SET prenom=:newprenom WHERE pseudo =\'userid\'');
		$req->execute(array('newprenom' => $newprenom));
	}
	if(isset($_POST['bday'])){
		$newbday = $_POST['bday'];
		$req = $bdd->prepare('UPDATE connexion SET Date_naissance=:newbday WHERE pseudo =\'userid\'');
		$req->execute(array('newbday' => $newbday));
	}
	if(isset($_POST['mail'])){
		$newmail = $_POST['mail'];
		$req = $bdd->prepare('UPDATE connexion SET mail=:newmail WHERE pseudo =\'userid\'');
		$req->execute(array('newmail' => $newmail));
	}
	if(isset($_POST['adresse'])){
		$newadresse = $_POST['adresse'];
		$req = $bdd->prepare('UPDATE connexion SET nom=:newadresse WHERE pseudo =\'userid\'');
		$req->execute(array('newadresse' => $newadresse));
	}
	if(isset($_POST['code_postal'])){
		$newpostal = $_POST['code_postal'];
		$req = $bdd->prepare('UPDATE connexion SET Code_postal=:newpostal WHERE pseudo =\'userid\'');
		$req->execute(array('newpostal' => $newpostal));
	}
	if(isset($_POST['ville'])){
		$newville = $_POST['ville'];
		$req = $bdd->prepare('UPDATE connexion SET Ville=:newville WHERE pseudo =\'userid\'');
		$req->execute(array('newville' => $newville));
	}
	?>
	<p>Informations mises à jour <br/> <a href = "Profil.php" title="Mon profil"> Cliquez pour revenir au profil </a>
	
	
	</html>
	
	
