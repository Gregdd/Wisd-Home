<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Wisd'Home - Page d'accueil</title>
    <link rel="stylesheet" href="../VUE/css/Accueil_2_bis.css" />
</head>

<body>

<?php include '../VUE/Header_2.php';?>
<?php include '../CONTROLEUR/Access_denied.php';?>


  
        <h1>Bienvenue <?php echo $_SESSION['prenom']?> !</h1>
        
        <div id="Conteneur">
        <div class="etatCapt">
        <h2>Etat des capteurs :</h2>
        	<form action="etat_capteurs.php" method="post">
        		<label for="temp">Temprérature de la maison : </label><br/>
        		<label for="humid">Humidité : </label><br/>
        		<label for="lumino">Nombre de capteurs luminosité activé(s) :</label><br/>
                <label for="camera">Caméra :</label><br/>
        		<label for="presence">Détecteur de présence :</label><br/>
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
        
    
<?php include '../VUE/Footer.php';?>
    
</body>

</html>
