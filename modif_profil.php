<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Modifier profil</title>
    <link rel="stylesheet" href="Profil.css" />
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</head>


    <?php include 'Header_2.php';?>


<body>
<h1>Mon profil</h1>
<div id="Barriere">
    <form method="post" action="Profil_actu.php">
    <div class="Colonne1">
        <fieldset>
            <legend>Votre identité</legend>
            <p> <span class="soustitre">Informations générales </span><br/><br/>
                <label for="nom"> Nom : </label>
                <input type="text" name="nom" id="nom" placeholder="Nom" size="25"> <br /><br />
                <label for="prenom"> Prénom : </label>
                <input type="text" name="prenom" id="prenom" placeholder="Prenom" size="25"/> <br /><br />
                <label for="birth"> Date de naissance ?</label>
                <input type="date" name="birth" id="birth"/> <br /><br />
                <label for="mail"> Adresse mail : </label>
                <input type="email" name="mail" id="mail" placeholder="moncompte@gmail.com" size="30" /> <br/><br />
                <label for="adresse"> Adresse : </label>
                <input type="text" name="adresse" id="prenom" placeholder="28 Rue Notre Dame des Champs" size="35"/> <br/><br />
                <label for="code postal"> Code postal : </label>
                <input type="text" name="postal" id="code postal" placeholder="75006" size="10" /> <br/><br />
                <label for="ville"> Ville : </label>
                <input type="text" name="ville" id="ville" placeholder="Paris" size="20" /> <br/><br />
                <input type="submit" value="Valider"/><br/><br />
            </p>
        </fieldset>
    </div>
    </form>
    <form method="post" action="mdp_actu.php">
    <div class="Colonne2">
        <fieldset>
            <legend>Informations sur votre compte</legend>
            <p> <span class ="soustitre" >Modifier mot de passe </span> : <br/><br/>
                <label for="amdp"> Ancien mot de passe : </label>
                <input type="password" name="amdp" id="amdp" placeholder="*******" size="25"> <br /><br />
                <label for="nmdp"> Nouveau mot de passe : </label>
                <input type="password" name="amdp" id="amdp" placeholder="*******" size="25" minlength="8"/> <br /><br />
                <label for="cmdp"> Confirmer mot de passe : </label>
                <input type="password" name="cmdp" id="cmdp" placeholder="*******" size="25" minlength="8"/> <br /><br />
                <input type="submit" value="Valider"/><br/><br />
            </p>
        </fieldset>
    </div>
    </form>
</div>
    <br/>

    <br/>


</body>

<?php include 'Footer.php';?>

</html>
