<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<title>Modification du mot de passe</title>
<link rel="stylesheet" href="css/Mdp_oublie-post.css"/>
<script type="text/javascript" src="../CONTROLEUR/Mdp_oublie.js"></script>
</head>

<body>

<?php include '../VUE/Header_1.php';?>

<main>
<div>
    <fieldset>
      <legend>Modification du mot de passe</legend><br/>
      <p>Nous allons vous envoyer un mail pour que vous puissiez récupérer votre compte en changeant votre mot de passe.</p><br/>
      <form method="post" action="../CONTROLEUR/mdp_post.php">
        <label for="mail">Veuillez entrer votre adresse mail :</label><br/><br/>
        <div id="failmail">Adresse mail invalide !</div><br/>
        <input type="text" id="mail" name="mail"/><br/><br/>
        <button onclick="test(mail)" id="Envoyer">Envoyer</button>
      </form>
    </fieldset>
</div>
    </main>

<?php include '../VUE/Footer.php';?>

</body>

</html>
