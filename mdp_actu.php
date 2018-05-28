<<?php session_start();
?>

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

$req = $bdd->prepare('SELECT Mot_de_passe FROM utilisateur WHERE pseudo = ?') or die(print_r($bdd->errorInfo()));
$req->execute(array($userid));
$mdp = $req->fetch();

if(!empty($_POST['amdp']) AND $_POST['amdp']==$mdp['Mot_de_passe']){
	if(!empty($_POST['nmdp']) ){
		if(!empty($_POST['cmdp']) AND $_POST['cmdp']==$_POST['nmdp']){
			$newmdp = $_POST['nmdp'];
			$req= $bdd -> prepare('UPDATE utilisateur SET Mot_de_passe =:newmdp WHERE pseudo = :ID');
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
