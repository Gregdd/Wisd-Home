<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Modification du mot de passe</title>
    <link rel="stylesheet" href="css/MDP_perdu.css"/>
    <?php session_start();?>
</head>

<body>

<?php include '../VUE/Header_1.php';?>

<main>
    <div>
        <fieldset>
            <legend>Modification du mot de passe</legend>

            <form  action="../CONTROLEUR/MDP_perdu-post.php" method="post">
                <br/>
                <label for="pseudo">Identifiant :</label><br/>
                <input type="text" name="pseudo" id="pseudo" size="30" placeholder="Ex : Dupont Marc" maxlength="30" /><br/><br/>
                <input type="submit">
            </form>

        </fieldset>
    </div>
</main>

<?php include '../VUE/Footer.php';?>

</body>

</html>
