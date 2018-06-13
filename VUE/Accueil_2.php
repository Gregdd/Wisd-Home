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
        		<label for="temp">Température de la maison : </label><br/>
        		<label for="humid">Humidité : </label><br/>
        		<label for="lumino">Nombre de capteurs luminosité activé(s) :</label><br/>
                <label for="camera">Caméra :</label><br/>
        		<label for="presence">Détecteur de présence :</label><br/>
        	</form>
        </div>

        <div class="etatCapt">
        	<h4>Tout eteindre/allumer luminosité : </h4>
          <p class="onoffswitch1">
          <input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1" checked>
          <label class="onoffswitch1-label" for="myonoffswitch1">
              <span class="onoffswitch1-inner"></span>
              <span class="onoffswitch1-switch"></span>
            </label>
        	</p>

        	<h4>Tout eteindre/allumer chauffage : </h4>
          <p class="onoffswitch2">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch2-checkbox" id="myonoffswitch2" checked>
          <label class="onoffswitch2-label" for="myonoffswitch2">
              <span class="onoffswitch2-inner"></span>
              <span class="onoffswitch2-switch"></span>
            </label>
        	</p>

        	<h4>Tout ouvrir/fermer volets : </h4>
          <p class="onoffswitch3">
          <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
          <label class="onoffswitch3-label" for="myonoffswitch3">
              <span class="onoffswitch3-inner"></span>
              <span class="onoffswitch3-switch"></span>
            </label>
        	</p>
        	</div>

        	<div class="etatCapt">
        	<h4>Tout ouvrir/fermer volets : </h4>
          <p class="onoffswitch4">
          <input type="checkbox" name="onoffswitch4" class="onoffswitch4-checkbox" id="myonoffswitch4" checked>
          <label class="onoffswitch4-label" for="myonoffswitch4">
              <span class="onoffswitch4-inner"></span>
              <span class="onoffswitch4-switch"></span>
            </label>
        	</p>

        	<h4>Eteindre/allumer caméra : </h4>
          <p class="onoffswitch5">
          <input type="checkbox" name="onoffswitch5" class="onoffswitch5-checkbox" id="myonoffswitch5" checked>
          <label class="onoffswitch5-label" for="myonoffswitch5">
              <span class="onoffswitch5-inner"></span>
              <span class="onoffswitch5-switch"></span>
            </label>
        	</p>

        	<h4>Eteindre/allumer présence : </h4>
          <p class="onoffswitch6">
          <input type="checkbox" name="onoffswitch6" class="onoffswitch6-checkbox" id="myonoffswitch6" checked>
          <label class="onoffswitch6-label" for="myonoffswitch6">
              <span class="onoffswitch6-inner"></span>
              <span class="onoffswitch6-switch"></span>
            </label>
        	</p>
        </div>
        </div>


<?php include '../VUE/Footer.php';?>

</body>

</html>
