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


        <form action="" method="POST">
            <section class = "gauche">
                <br><label>Nom : </label><br>
                <input type="text"><br><br>
                <label>Prénom : </label><br>
                <input type="text"><br><br>
                <label>Email : </label><br>
                <input type="text"><br><br>
                <label>Adresse : </label><br>
                <input type="text"><br><br>
                <label>Code postal : </label><br>
                <input type="text"><br><br>
                <label>Ville : </label><br>
                <input type="text"><br><br>
            </section>
            <section class = "droite">
                <br><label>Identifiant : </label><br>
                <input type="text"><br><br>
                <label>Mot de passe : </label><br>
                <input type="password"><br><br>
                <label>Confirmation du mot de passe : </label><br>
                <input type="password"><br><br>
                <label>Question secrète :</label><br>
                <select>
                    <option>Quelle est votre ville de naissance?</option>
                    <option>Quel est le nom de jeune fille de votre mère?</option>
                    <option>Quel est le nom de votre premier animal de compagnie?</option>
                </select><br><br>
                <label>Réponse : </label><br>
                <input type="text"><br><br>
                <label>Acceptez-vous les conditions d'utilisation? : </label>
                <input type="checkbox" required><br><br>
                <input type="submit"><br>
            </section>
        </form>

</div>
    
<?php include 'Footer.php';?>
    
</body>

</html>
