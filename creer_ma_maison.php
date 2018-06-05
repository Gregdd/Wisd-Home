<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Wisd'Home - Page d'accueil</title>
    <link rel="stylesheet" href="Style_creer_maison.css" />
    <script src="FonctionsJS.js"></script>

</head>

<body>

<?php include 'Header_2.php';?>

<main>

    <form method="post" action="creer_ma_maison_post.php">
        <h3>Ajouter une pièce :</h3> <br/>
        <label for="nompiece">Nom de la piece : <input  type ="text" name="nompiece"></label><br/><br/>
        <h3>Ajouter un capteur :</h3> <br/>
        <label for="typecapteur">Type de capteur :
            <select name="typecapteur">
                <option></option>
                <option>Type de capteur</option>
                <option>Humidité</option>
                <option>Température</option>
                <option>Présence</option>
                <option>Fumée</option>
                <option>CO2</option>
                <option>Luminosité</option>
                <option>Caméra</option>
            </select>
        </label> <br/><br/>
        <h3>Ajouter un actionneur :</h3> <br/>
        <label for="typeactionneur">Type d'actionneur :
            <select name="typeactionneur">
                <option></option>
                <option>Type d'actionneur</option>
                <option>Volets</option>
                <option>Porte</option>
                <option>Lumiere</option>
                <option>Temperature</option>
            </select>
        </label><br/><br/>

        <input type="submit" value="Ajouter"><br/><br/>

    </form>



</main>

<?php include 'Footer.php';?>

</body>


</html>
