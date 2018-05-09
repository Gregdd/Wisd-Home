<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<title>Connexion</title>
<link rel="stylesheet" href="Footer.css">
<link rel="stylesheet" href="Connexion.css"/>
</head>
    
<body>
    
<?php include 'Header_1.php';?>

<main>
<div>
    <fieldset>
        <legend>Connexion</legend>

        <form method="post" action="traitement.php">
            <br/>
            <label for="Identifiant">Identifiant :</label>
            <input type="text" name="Identifiant" id="Identifiant" size="30" placeholder="Ex : Dupont Marc" maxlength="30" /><br/><br/>
            <label for="pass">Mot de passe :</label>
            <input type="password" name="pass" id="pass" size="30" maxlength="30" /><br/><br/>
            <label for="Souvenir"> Se souvenir de moi</label>
            <input type="checkbox" name="Souvenir" id="Souvenir" /><br/><br/>
            <input type="submit" value="Connexion"><br/><br/>
        </form>

        <a href="MDP_perdu.php" title="Mot de passe oublié" target="_blank">Mot de passe oublié ?</a>

    </fieldset>
</div>
</main>

<?php include 'Footer.php';?>
    
</body>
</html>
