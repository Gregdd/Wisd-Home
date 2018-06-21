<?php
session_start();
include '../CONTROLEUR/database.php';
include '../VUE/Header_admin.php';
//VUE
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Back-Office FAQ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="view.css">
    <link rel="icon" type="image/png" href="Image/icon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php include '../CONTROLEUR/model_FAQ.php' ?>
<body>

<h2> <center> Table des questions et réponses </center> </h2>
<?php affichageFAQ() ?>
<br>
<center>
    Repondre
    <form name="postquestion" onsubmit="return Test()" method="post"  action="../MODELE/post_reponse.php" >
        <div class="form">
            <label for="reponseid">Repondre à :
                    <select name="reponseid">
                        <?php

                        $reponse = $bdd->query('SELECT * FROM faq');

                        while ($donnees = $reponse->fetch())
                        {
                            ?>
                            <option value="<?php echo $donnees['ID']; ?>"> <?php echo $donnees['ID']; ?></option>
                            <?php
                        }

                        ?>
                    </select>
            </label> <br/>
            <textarea name="reponse" placeholder="Réponse"></textarea>
            <br>

            <input type="submit" value="Ajouter"></div>

    </form>
</center>
<script>
    function Test(){
        var rep=postquestion.reponse.value;

        if (rep==""){
            alert("Veuillez mettre une réponse");
            return false;
            postquestion.reponse.focus();
        }
    }
</script>
<br>
<center>
    Supprimer une question
    <form action="../MODELE/fonctionSQL.php" method="post">
        <div class="form">
            <label><input type="number" name="ID" placeholder="ID"></label><br></span>
            <input type="submit" value="Supprimer"></div>
    </form>
</center>

<br>
<?php include '../VUE/Footer.php';?>
</body>
</html>
