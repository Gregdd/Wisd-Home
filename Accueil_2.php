<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
    <meta charset="ISO-8859-1" />
    <title>Wisd'Home - Page d'accueil</title>
    <link rel="stylesheet" href="Accueil_2_bis.css" />
</head>

<body>
<header>
<?php include 'Header_2.php';?>
</header>

  
        <h1>Bienvenue <?php echo $_SESSION['prenom']?> !</h1>
        
        <div id="Conteneur">
        <div class="etatCapt">
        <h2>Etat des capteurs :</h2>
        	<form action="etat_capteurs.php" method="post">
        		<label for="temp">Temprérature de la maison : </label><?php echo $_POST["température"]?> <br/>
        		<label for="humid">Humidité : </label><?php echo $_POST["humidité"]?><br/>
        		<label for="lumino">Nombre de capteurs luminosité activé(s) :</label><?php echo $_POST["nombreLuminosité"]?><br/>
        		<label for="camera">Caméra :</label><?php echo $_POST["etatCamera"]?><br/>
        		<label for="presence">Détecteur de présence :</label><?php echo $_POST["etatPresence"]?><br/>
        	</form>
        </div>
        
        <div class="etatCapt">
        	<h4>Tout eteindre/allumer luminosité : </h4>
        	<p class="onoffswitch">
            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
            <label class="onoffswitch-label" for="myonoffswitch">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        	</p>
        	
        	<h4>Tout eteindre/allumer chauffage : </h4>
            <p class="onoffswitch">
            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
            <label class="onoffswitch-label" for="myonoffswitch">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        	</p>
        	
        	<h4>Tout ouvrir/fermer volets : </h4>
            <p class="onoffswitch">
            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
            <label class="onoffswitch-label" for="myonoffswitch">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        	</p>
        	</div>
        	
        	<div class="etatCapt">
        	<h4>Tout ouvrir/fermer volets : </h4>
            <p class="onoffswitch">
            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
            <label class="onoffswitch-label" for="myonoffswitch">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        	</p>
        	
        	<h4>Eteindre/allumer caméra : </h4>
            <p class="onoffswitch">
            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
            <label class="onoffswitch-label" for="myonoffswitch">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        	</p>
        	
        	<h4>Eteindre/allumer présence : </h4>
            <p class="onoffswitch">
            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
            <label class="onoffswitch-label" for="myonoffswitch">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        	</p>
        </div>
        </div>
        
    
<?php include 'Footer.php';?>
    
</body>

</html>
