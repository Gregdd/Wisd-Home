<html>

<head>

    <meta charset="utf-8" />
    <title>Modifier profil</title>
    <link rel="stylesheet" href="Profil_actu.css"
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</head>
	    <?php include 'Header_2.php';?>
<?php

	include 'database.php';

	$userid = $_SESSION['ID'];

	if(!empty($_POST['nom'])){
		$newnom = $_POST['nom'];
		$req = $bdd->prepare('UPDATE utilisateur SET Nom=:newnom WHERE pseudo =:ID');
		$req->execute(array(
				'newnom' => $newnom,
				'ID' => $userid
		));
		$_SESSION['nom']=$newnom;
	}
	if(!empty($_POST['prenom'])){
		$newprenom = $_POST['prenom'];
		$req = $bdd->prepare('UPDATE utilisateur SET Prenom=:newprenom WHERE pseudo =:ID');
		$req->execute(array(
				'newprenom' => $newprenom,
				'ID' => $userid

		));
		$_SESSION['prenom']= $newprenom;
	}
	if(!empty($_POST['bday'])){
		$newbday = $_POST['bday'];
		$req = $bdd->prepare('UPDATE utilisateur SET Date_naissance=:newbday WHERE pseudo =:ID');
		$req->execute(array('newbday' => $newbday,
				'ID' => $userid));
		$_SESSION['bday']= $newbday;
	}
	if(!empty($_POST['mail'])){
		$newmail = $_POST['mail'];
		$req = $bdd->prepare('UPDATE utilisateur SET mail=:newmail WHERE pseudo =:ID');
		$req->execute(array('newmail' => $newmail,
				'ID' => $userid));
		$_SESSION['mail']= $newmail;
	}
	if(!empty($_POST['adresse'])){
		$newadresse = $_POST['adresse'];
		$req = $bdd->prepare('UPDATE utilisateur SET Adresse=:newadresse WHERE pseudo =:ID');
		$req->execute(array(
				'newadresse' => $newadresse,
				'ID' => $userid
		));
		$_SESSION['Adresse']= $newadresse;
	}
	if(!empty($_POST['code_postal'])){
		$newpostal = $_POST['code_postal'];
		$req = $bdd->prepare('UPDATE utilisateur SET Code_postal=:newpostal WHERE pseudo =:ID');
		$req->execute(array(
				'newpostal' => $newpostal,
				'ID' => $userid
		));
		$_SESSION['Code_postal']= $newpostal;
	}
	if(!empty($_POST['ville'])){
		$newville = $_POST['ville'];
		$req = $bdd->prepare('UPDATE utilisateur SET Ville=:newville WHERE pseudo =:ID');
		$req->execute(array(
				'newville' => $newville,
				'ID' => $userid
		));
		$_SESSION['Ville']= $newville;
	}
	?>

	<fieldset>
    <legend>Information</legend>
    <br/>
        Vos données ont été mises à jour<br/>
        <a href = "Profil.php" title="Mon profil">Cliquez pour revenir au profil</a>
    <br/><br/>
  </fieldset>
    	<?php include 'Footer.php';?>
	</html>
