<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon profil</title>
    <link rel="stylesheet" href="css/Profil.css" />

</head>

<body>
<?php include '../VUE/Header_2.php';?>
<?php include '../VUE/Acces_refuse.php';?>

<h1>Mon profil</h1>
<div id="Barriere">
        <div class="Colonne1">
            <fieldset>
                <legend>Votre identité</legend>
                <p> <span class="soustitre">Informations générales</span><br/><br/>

                    <label for="nom"> Nom : </label> <?php echo $_SESSION['nom'];?> 
                    <br /><br />
                    <label for="prenom"> Prénom : </label> <?php echo $_SESSION['prenom'];?> 
                    <br /><br />
                    <label> Date de naissance :</label> <?php echo $_SESSION['bday'];?> 
                    <br /><br />
                    <label for="mail"> Adresse mail : </label> <?php echo $_SESSION['mail'];?> 
                    <br/><br />
                    <label for="Adresse"> Adresse : </label> <?php echo $_SESSION['Adresse'];?> 
                    <br/><br />
                    <label for="ville"> Ville : </label> <?php echo $_SESSION['Ville'];?> 
                    <br/><br />
                    <label for="code_postal"> Code postal : </label> <?php echo $_SESSION['Code_postal'];?> 
                    <br/><br />
                    <a href="modif_profil.php" title="Modifier" target="_blank">Modifier profil</a><br/>
					<a href="modif_mdp.php" title="Modifier mot de passe" target="_blank">Modifier mot de passe</a><br/>
            </fieldset>
        </div>


</div>
<br/>
<br/>

<?php include '../VUE/Footer.php';?>
</body>
</html>
