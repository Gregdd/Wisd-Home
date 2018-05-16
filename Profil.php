<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon profil</title>
    <link rel="stylesheet" href="Profil.css" />

</head>

<body>
<?php include 'Header_2.php';?>

<h1>Mon profil</h1>
<div id="Barriere">
        <div class="Colonne1">
            <fieldset>
                <legend>Votre identité</legend>
                <p>Informations générales <br/><br/>
                    <label for="nom"> Nom : </label> <?php echo $_SESSION['nom'];?>
                    <br /><br />
                    <label for="prenom"> Prénom : </label> <?php echo $_SESSION['prenom'];?>
                    <br /><br />
                    <label> Date de naissance :</label> <?php echo $_SESSION['anniversaire'];?>
                    <br /><br />
                    <label for="mail"> Adresse mail : </label> <?php echo $_SESSION['mail'];?>
                    <br/><br />
                    <label for="adresse"> Adresse : </label> <?php echo $_SESSION['rue'];?>
                    <br/><br />
                    <label for="ville"> Ville : </label> <?php echo $_SESSION['ville'];?>
                    <br/><br />
                    <label for="code postal"> Code postal : </label> <?php echo $_SESSION['code postal'];?>
                    <br/><br />
                </p>
            </fieldset>
        </div>


        <div class="Colonne2">
            <fieldset>
                <legend>Informations sur votre compte</legend>
                <p> modifier mot de passe : <br/><br/>
                    <label for="amdp"> Ancien mot de passe : </label>
                    <input type="password" name="amdp" id="amdp" placeholder="*******" size="25"> <br /><br />
                    <label for="nmdp"> Nouveau mot de passe : </label>
                    <input type="password" name="amdp" id="amdp" placeholder="*******" size="25" minlength="8"/> <br /><br />
                    <label for="cmdp"> Confirmer mot de passe : </label>
                    <input type="password" name="cmdp" id="cmdp" placeholder="*******" size="25" minlength="8" required/> <br /><br />
                    <input type="submit" value="Valider"/><br/><br />

                </p>
            </fieldset>
        </div>

</div>
<br/>
<br/>

<?php include 'Footer.php';?>
</body>
</html>
