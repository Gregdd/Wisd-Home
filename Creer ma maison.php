<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Wisd'Home - Page d'accueil</title>
    <link rel="stylesheet" href="Style_créer_maison.css" />
    <script src="FonctionsJS.js"></script>

</head>

<body>

<?php include 'Header_2.php';?>

<main>

    <div>
    <form method="get" action="Home.php">
        <label>Nombre de pièces : </label>
        <label ><input  type ="number" min="1" max="7" placeholder="1"/></label>

    </form><br/><br/>


    <form method="get" action="Pièce.php">
        <label >Nom de la pièce : </label>
        <label><input type="text"></label><br>

        <br/><br/>

        <span class="bouton" id ="ajouter" >Ajouter un capteur</span><br/><br/>

        <span id = "capteur"><br/> Capteur "n" :
            <label>
                <select>
                    <option>Type de capteur</option>
                    <option>Humidité</option>
                    <option>Température</option>
                    <option>Présence</option>
                    <option>Fumée</option>
                    <option>CO2</option>
                    <option>Luminosité</option>
                    <option>Caméra</option>
                </select>
            </label>
            <span id ="Supprimer">Supprimer</span>
            <br/>
        </span>

        <script type="text/javascript" src="JavaScript.js"></script>

    </form>

    <form>
        <br/>
        <input type="submit" value="Enregistrer la pièce"/>
    </form>

</div>

</main>

<?php include 'Footer.php';?>

</body>


</html>
