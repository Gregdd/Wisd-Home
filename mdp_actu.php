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
if(isset($_POST('amdp')) AND $_POST('amdp')==$mdp ){
	if(isset($_POST('nmdp')) ){
		if(isset($_POST('cmdp')) AND $_POST('cmdp')==$_POST('ndmp')){
			$req->exec('UPDATE connexion SET mdp = nmdp WHERE id = \'userid\'');
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