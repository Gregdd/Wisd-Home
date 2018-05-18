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
	$userid = $_SESSION[id];
	try
	{
		$bdd = new PDO('mysql:host=localhost;port=8889;dbname=connexion;charset=utf8','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); #mettre le port 8889
	}
	catch(Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	
	$mdp = $bdd->query('SELECT mdp FROM connexion WHERE ID =\'userid\'') or die(print_r($bdd->errorInfo()));
	// à modifier
	if(isset($_POST('nom'))){
		$newnom = nom;
		$req = $bdd->prepare('UPDATE connexion SET nom=:newnom WHERE ID =\'userid\'');
		$req->execute(array('newnom' => $newnom));
	}
	if(isset($_POST('prenom'))){
		$newprenom = prenom;
		$req = $bdd->prepare('UPDATE connexion SET prenom=:newprenom WHERE ID =\'userid\'');
		$req->execute(array('newprenom' => $newprenom));
	}
	if(isset($_POST('birth'))){
		$newbirth = birth;
		$req = $bdd->prepare('UPDATE connexion SET nom=:newnom WHERE ID =\'userid\'');
		$req->execute(array('newbirth' => $newbirth));
	}
	if(isset($_POST('mail'))){
		$newmail = mail;
		$req = $bdd->prepare('UPDATE connexion SET nom=:newnom WHERE ID =\'userid\'');
		$req->execute(array('newmail' => $newmail));
	}
	if(isset($_POST('adresse'))){
		$newadresse = adresse;
		$req = $bdd->prepare('UPDATE connexion SET nom=:newnom WHERE ID =\'userid\'');
		$req->execute(array('newadresse' => $newadresse));
	}
	if(isset($_POST('postal'))){
		$newpostal = postal;
		$req = $bdd->prepare('UPDATE connexion SET postal=:newpostal WHERE ID =\'userid\'');
		$req->execute(array('newpostal' => $newpostal));
	}
	if(isset($_POST('ville'))){
		$newville = newville;
		$req = $bdd->prepare('UPDATE connexion SET ville=:newville WHERE ID =\'userid\'');
		$req->execute(array('newnom' => $newnom));
	}
	
	?>
	</html>
	
	