<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon profil</title>
    <link rel="stylesheet" href="profil.css" />
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</head>

<body>

<?php include 'Header_2.php';?>

<main>

    <div>
        <h1>Mon profil</h1>
        <form method="post" action="profil.php">
            <fieldset>
                <legend>Votre identité</legend>
                <p>Informations générales <br/><br/>
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
                    <input type="text" name="code postal" id="code postal" placeholder="75006" size="10" /> <br/><br />
                    <label for="ville"> Ville : </label>
                    <input type="text" name="ville" id="ville" placeholder="Paris" size="20" /> <br/><br />
                </p>
            </fieldset>

            <fieldset>
                <legend>Informations sur votre compte</legend>
                <h2> modifier mot de passe : </h2><br/><br/>
                <div id="conteneur">
                    <div class="blocmdp">
                        <label for="amdp"> Ancien mot de passe : </label>
                        <input type="password" name="amdp" id="amdp" placeholder="*******" size="25"> <br /><br />
                        <label for="nmdp"> Nouveau mot de passe : </label>
                        <input type="password" name="amdp" id="amdp" placeholder="*******" size="25" minlength="8"/> <br /><br />
                        <label for="cmdp"> Confirmer mot de passe : </label>
                        <input type="password" name="cmdp" id="cmdp" placeholder="*******" size="25" minlength="8" required/> <br /><br />
                        <input type="submit" value="Valider"/><br/><br />
                    </div>
                    <div class="blocabo">
                        <a href="Abonnement.html" title="abonnement" target="_blank" class="Abonnement">Abonnement</a>
                    </div>
                </div>
               
            </fieldset>
        </form>
        
        

        
    </div>

</main>

<?php include 'Footer.php';?>
    
</body>

</html>
