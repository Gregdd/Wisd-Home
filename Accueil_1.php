<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Wisd'Home - Page d'accueil</title>
    <link rel="stylesheet" href="Accueil_1.css"/>
</head>

<body>

<?php include 'Header_1.php'; ?>

<main>
<div id="Presentation">
	<div class="photo">
    	<img src="logo.png" id="logo2" />
    </div>
    <div class="texte">
    	<image Domotique="Domotique.jpg" />
    	<p>Bienvenue sur Wisd'Home</p>
    	<p><a class = lien href="Connexion.php">Commencer</a></p>
    	<p>Qui sommes-nous ?</p>
    	<p class="txt"> GRAND TEXTE SUR L'ENTREPRISE</p>
    	<?php echo "Ceci est du <strong>texte</strong>"; ?>
	</div>
</div>
</main>
    
<?php include 'Footer.php';?>
    
</body>

</html>
