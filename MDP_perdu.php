<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<title>Modification du mot de passe</title>
<link rel="stylesheet" href="MDP_perdu.css"/>
</head>

<body>

<?php include 'Header_1.php';?>

<main>
<div>
    <fieldset>
        <legend>Modification du mot de passe</legend>

        <form method="post" action="MDP_perdu-post.php">
            <br/>
            <label for="Identifiant">Identifiant :</label><br/>
            <input type="text" name="Identifiant" id="Identifiant" size="30" placeholder="Ex : Dupont Marc" maxlength="30" /><br/><br/>
            <label for="pass">Nouveau mot de passe :</label>
            <input type="password" name="pass" id="pass" size="30" maxlength="30" /><br/><br/>
            <label for="pass">Confirmation du nouveau mot de passe :</label>
            <input type="password" name="pass" size="30" maxlength="30" /><br/><br/>
            <input type="submit" value="Valider"> <a href="Accueil_2.php" title="Page d'accueil"></a><br/><br/>
        </form>

    </fieldset>
</div>
    </main>

    <?php include 'Footer.php';?>
    
</body>

</html>
