<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Modification du mot de passe</title>
    <link rel="stylesheet" href="css/MDP_perdu.css"/>
</head>

<body>

<?php include '../VUE/Header_1.php';?>

<main>
    <div>
        <fieldset>
            <legend>Modification du mot de passe</legend>

            <form action="../CONTROLEUR/MDP_perdu-post.php" method="post">
                <br/>
                <?php echo $question;?>
                <label for="reponse"></label><br/>
                <input type="text" name="reponse" id="reponse" size="30" maxlength="30" /><br/><br/>
                <input type="hidden" name="pseudo" value="<?php echo $_POST['pseudo']; ?>">
                <label for="password">Nouveau mot de passe :</label><br/>
                <input type="password" name="pass"/><br/><br/>
                <label for="confirm_password">Confirmer le nouveau mot de passe :</label><br/>
                <input type="password" name="confirm_pass"><br/><br/>
                <input type="submit"/>

            </form>

        </fieldset>
    </div>
</main>

<?php include '../VUE/Footer.php';?>

</body>

</html>
