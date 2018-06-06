<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Inscription.css"/>
    <title>Inscription</title>
    <link rel="text/javascript" href="FonctionsJS.js"/>

</head>

<body>

<?php include 'Header_1.php';?>

<div>
    <h1>Inscription</h1><br/>


    <form name="formulaire" onsubmit="return Test()" action="inscription_post2.php" method="post">
        <section class = "gauche">
            <label for="nom">Nom : </label><br>
            <input type="text" name="nom" id="nom" required><br><br>
            <label for="prenom">Prenom : </label><br>
            <input type="text" name="prenom" id="prenom" required><br><br>
            <label for="bday">Date de naissance : </label><br>
            <input type="date" name="bday" id="bday" required><br><br>
            <label for="mail">Email : </label><br>
            <input type="text" name="mail" id="mail" required><br><br>
            <label for="adresse">Adresse : </label><br>
            <input type="text" name="adresse" id="adresse" required><br><br>
            <label for="ville">Ville : </label><br>
            <input type="text" name="ville" id="ville" required><br><br>
            <label for="codepost">Code postal : </label><br>
            <input type="text" name="codepost" id="codepost" required><br><br>


        </section>
        <section class = "droite">
            <label for="identifiant">Identifiant : </label><br>
            <input type="text" name="identifiant" id="identifiant" required><br><br>
            <label for="pass">Mot de passe : </label><br>
            <input type="password" name="pass" id="pass" required><br><br>
            <label for="pass2">Confirmation du mot de passe : </label><br>
            <input type="password" name="pass2" id="pass2" required><br><br>
            <label>Question secrète :</label><br>
            <select name ="question" required>
                <option>Quelle est votre ville de naissance?</option>
                <option>Quel est le nom de jeune fille de votre mère?</option>
                <option>Quel est le nom de votre premier animal de compagnie?</option>
            </select><br><br>
            <label for = "reponse">Réponse : </label><br>
            <input type="text" name = "reponse" required><br><br>
            <label>Accepter les conditions d'utilisation : </label>
            <input type="checkbox" id = "check" required><br><br>

            <input type="submit" id="click" ><br>

        </section>

    </form>


</div>

<?php include 'Footer.php';?>

</body>

</html>

<script src="vérifications.js"></script>
