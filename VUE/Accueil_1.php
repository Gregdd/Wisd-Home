<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Wisd'Home - Page d'accueil</title>
    <link rel="stylesheet" href="/Wisd-Home-master/VUE/css/Accueil_1.css"/>
</head>

<body>

<?php include '../VUE/Header_1.php'; ?>

<main>
<div id="Presentation">

	<div class="photo">
    	<img src="/Wisd-Home-master/VUE/img/logo.png" id="logo2" />
    </div>

    <div class="texte">
		<h2>Bienvenue sur Wisd'Home </h2>
		<a class = lien href="/Wisd-Home-master/VUE/Connexion.php">Commencer</a><br/>
		<h3>Qui sommes-nous ?</h3>
		<p>
			Wisd'Home est une entreprise de Domotique fondée en 2018.<br/>
			Ses différents domaines sont :
		</p>
		<div class = cercle><div class =txt>Informatique</div></div>
		<div class = cercle><div class =txt>Signaux</div></div>
		<div class = cercle><div class =txt>Electronique</div></div>
		<div class = cercle><div class =txt>Télécom</div></div>
	</div>

</div>
</main>
    
<?php include '/VUE/Footer.php';?>
    
</body>

</html>

