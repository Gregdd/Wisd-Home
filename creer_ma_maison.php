<!DOCTYPE html>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
}catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>

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
        <input type="submit" value="Ajouter"><br/><br/>

    </form>

    <form method="post" action="creer_ma_maison_post.php">

        <h3>Ajouter un capteur :</h3>
        <label for="piececapt">Piece :
            <select name="piececapt">
                <?php

                $reponse = $bdd->query('SELECT * FROM pieces');

                while ($donnees = $reponse->fetch())
                {
                    ?>
                    <option value="<?php echo $donnees['idpiece']; ?>"> <?php echo $donnees['nom']; ?></option>
                    <?php
                }

                ?>

            </select>
        </label>


        <label for="typecapteur">Type de capteur :
            <select name="typecapteur">
                <option></option>
                <option value="humidite">Humidité</option>
                <option value="temperature">Température</option>
                <option value="presence">Présence</option>
                <option value="fumee">Fumée</option>
                <option value="co2">CO2</option>
                <option value="luminosite"> Luminosité</option>
                <option value="camera">Caméra</option>
            </select>
        </label> <br/><br/>

        <input type="submit" value="Ajouter" > <br/><br/>

    </form>

    <form method="post" action="creer_ma_maison_post.php">

        <h3>Ajouter un actionneur :</h3> <br/>
        <label for="pieceactio">Piece :
            <select name="pieceactio">
                <?php

                $reponse = $bdd->query('SELECT * FROM pieces');

                while ($donnees = $reponse->fetch())
                {
                    ?>
                    <option value="<?php echo $donnees['id']; ?>"> <?php echo $donnees['nom']; ?></option>
                    <?php
                }

                ?>
            </select>
        </label>
        <label for="typeactionneur">Type d'actionneur :
            <select name="typeactionneur">
                <option></option>
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