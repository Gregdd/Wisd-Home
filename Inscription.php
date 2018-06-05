<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Inscription.css"/>
    <title>Inscription</title>
    <link rel="text/javascript" href="vérifications.js"/>
    <link rel="text/javascript" href="FonctionsJS.js"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>


<?php include 'Header_1.php';?>

<div>
    <h1>Inscription</h1><br/>


    <form name="formulaire" action="inscription_post2.php" method="post">
        <section class = "gauche">
            <label for="nom">Nom : </label><br>
            <input type="text" name="nom" id="nom"><br><br>
            <label for="prenom">Prenom : </label><br>
            <input type="text" name="prenom" id="prenom"><br><br>
            <label for="identifiant">Identifiant : </label><br>
            <input type="text" name="identifiant" id="identifiant"><br><br>
            <label for="bday">Date de naissance : </label><br>
            <input type="date" name="bday" id="bday"><br><br>
            <label for="mail">Email : </label><br>
            <input type="text" name="mail" id="mail"><br><br>
            <label for="adresse">Adresse : </label><br>
            <input type="text" name="adresse" id="adresse"><br><br>
            <label for="ville">Ville : </label><br>
            <input type="text" name="ville" id="ville"><br><br>
            <label for="codepost">Code postal : </label><br>
            <input type="text" name="codepost" id="codepost"><br><br>


        </section>
        <section class = "droite">
            <label for="pass">Mot de passe : </label><br>
            <input type="password" name="pass" id="pass"><br><br>
            <label for="pass2">Confirmation du mot de passe : </label><br>
            <input type="password" name="pass2" id="pass2"><br><br>
            <label>Question secrète :</label><br>
            <select name ="question">
                <option>Quelle est votre ville de naissance?</option>
                <option>Quel est le nom de jeune fille de votre mère?</option>
                <option>Quel est le nom de votre premier animal de compagnie?</option>
            </select><br><br>
            <label for = "reponse">Réponse : </label><br>
            <input type="text" name = "reponse"><br><br>
            <label>Accepter les conditions d'utilisation : </label>
            <input type="checkbox" id = "check" required><br><br>

            <input type="submit"><br>
        </section>
    </form>


</div>

<?php include 'Footer.php';?>
<script src="vérifications.js"></script>
</body>

</html>


    <script>
        function Test(){
            var pass=formulaire.pass.value;
            var pass2=formulaire.pass2.value;
            if (pass!=pass2){
                alert(" Les deux mots de passes ne correspondent pas !");
                return false;
                formulaire.pass.focus();
            }

        }
    </script>



