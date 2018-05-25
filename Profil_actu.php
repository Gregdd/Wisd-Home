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
	
	
	try
	{
		$bdd = new PDO('mysql:host=localhost;port=8889;dbname=wisdhome;charset=utf8','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); #mettre le port 8889
	}
	catch(Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	$userid = $_SESSION['ID'];
	
	if(isset($_POST['nom'])){
		$newnom = $_POST['nom'];
		$req = $bdd->prepare('UPDATE connexion SET Nom=:newnom WHERE pseudo =:ID');
		$req->execute(array(
				'newnom' => $newnom,
				'ID' => $userid
		));
		$_SESSION['nom']=$newnom;
	}
	if(isset($_POST['prenom'])){
		$newprenom = $_POST['prenom'];
		$req = $bdd->prepare('UPDATE connexion SET Prenom=:newprenom WHERE pseudo =:ID');
		$req->execute(array(
				'newprenom' => $newprenom,
				'ID' => $userid
				
		));
		$_SESSION['prenom']= $newprenom;
	}
	if(isset($_POST['bday'])){
		$newbday = $_POST['bday'];
		$req = $bdd->prepare('UPDATE connexion SET Date_naissance=:newbday WHERE pseudo =:ID');
		$req->execute(array('newbday' => $newbday,
				'ID' => $userid));
		$_SESSION['bday']= $newbday;
	}
	if(isset($_POST['mail'])){
		$newmail = $_POST['mail'];
		$req = $bdd->prepare('UPDATE connexion SET mail=:newmail WHERE pseudo =:ID');
		$req->execute(array('newmail' => $newmail,
				'ID' => $userid));
		$_SESSION['mail']= $newmail;
	}
	if(isset($_POST['adresse'])){
		$newadresse = $_POST['adresse'];
		$req = $bdd->prepare('UPDATE connexion SET nom=:newadresse WHERE pseudo =:ID');
		$req->execute(array(
				'newadresse' => $newadresse,
				'ID' => $userid
		));
		$_SESSION['adresse']= $newadresse;
	}
	if(isset($_POST['code_postal'])){
		$newpostal = $_POST['code_postal'];
		$req = $bdd->prepare('UPDATE connexion SET Code_postal=:newpostal WHERE pseudo =:ID');
		$req->execute(array(
				'newpostal' => $newpostal,
				'ID' => $userid
		));
		$_SESSION['Code_Postal']= $newpostal;
	}
	if(isset($_POST['ville'])){
		$newville = $_POST['ville'];
		$req = $bdd->prepare('UPDATE connexion SET Ville=:newville WHERE pseudo =:ID');
		$req->execute(array(
				'newville' => $newville,
				'ID' => $userid
		));
		$_SESSION['ville']= $newville;
	}
	?>
	<p>Informations mises à jour <br/> <a href = "Profil.php" title="Mon profil"> Cliquez pour revenir au profil </a>

	</html>
