<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Inscription.css"/>
    <title>Inscription</title>
</head>

<body>

<?php include 'Header_1.php';?>

<div>
    <h1>Inscription</h1><br/>


    <form action="inscription_post.php" method="post">
        <section class = "gauche">
            <br><label for="nom">Nom : </label><br>
            <input type="text" name="nom" id="nom"><br><br>
            <label for="prenom">Prenom : </label><br>
            <input type="text" name="prenom" id="prenom"><br><br>
            <label for="identifiant">Identifiant : </label><br>
            <input type="text" name="identifiant" id="identifiant"><br><br>
            <label for="mail">Email : </label><br>
            <input type="text" name="mail" id="mail"><br><br>
            <label for="codepost">Code postal : </label><br>
            <input type="text" name="codepost" id="codepost"><br><br>
            <label for="ville">Ville : </label><br>
            <input type="text" name="ville" id="ville"><br><br>



        </section>
        <section class = "droite">
            <label for="pass">Mot de passe : </label><br>
            <input type="password" name="pass" id="pass"><br><br>
            <label for="pass2">Confirmation du mot de passe : </label><br>
            <input type="password" name="pass2"><br><br>
            <label>Question secrète :</label><br>
            <select name="question">
                <option>Quelle est votre ville de naissance?</option>
                <option>Quel est le nom de jeune fille de votre mère?</option>
                <option>Quel est le nom de votre premier animal de compagnie?</option>
            </select><br><br>
            <label for="Reponse">Réponse : </label><br>
            <input type="text" name="Reponse"><br><br>
            <label>Accepter les conditions d'utilisation : </label>
            <input type="checkbox" required><br><br>
            <input type="submit"><br>
        </section>
    </form>

</div>

<?php include 'Footer.php';?>

</body>

</html>
