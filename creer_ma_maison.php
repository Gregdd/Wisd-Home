<!DOCTYPE html>
<?php

include 'database.php';

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
<section class="gauche">
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
                    <option value="<?php echo $donnees['idpiece']; ?>"> <?php echo $donnees['nom']; ?></option>
                    <?php
                }

                ?>
            </select>
        </label>
        <label for="typeactionneur">Type d'actionneur :
            <select name="typeactionneur">
                <option></option>
                <option value="volets">Volets</option>
                <option value="porte">Porte</option>
                <option value="lumiere">Lumiere</option>
                <option value="temperature">Temperature</option>
            </select>
        </label><br/><br/>

        <input type="submit" value="Ajouter"><br/><br/>
    </form>

</section>

<section class="droite">
    <form method="post" action="creer_ma_maison_post.php">
        <h3>Supprimer une pièce :</h3> <br/>
        <label for="nompiece1">Piece :
            <select name="nompiece1">
                <?php

                $reponse = $bdd->query('SELECT * FROM pieces');

                while ($donnees = $reponse->fetch())
                {
                    ?>
                    <option value="<?php echo $donnees['nom']; ?>"> <?php echo $donnees['nom']; ?></option>
                    <?php
                }

                ?>

            </select>
        </label>
        <input type="submit" value="Supprimer"><br/><br/>
    </form>


    <form method="post" action="creer_ma_maison_post.php">
        <h3>Supprimer un capteur :</h3>
        <label for="piececapt1">Piece :
            <select name="piececapt1">
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


        <label for="typecapteur1">Type de capteur :
            <select name="typecapteur1">
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

        <input type="submit" value="Supprimer" > <br/><br/>
    </form>


    <form method="post" action="creer_ma_maison_post.php">

        <h3>Supprimer un actionneur :</h3> <br/>
        <label for="pieceactio1">Piece :
            <select name="pieceactio1">
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
        <label for="typeactionneur1">Type d'actionneur :
            <select name="typeactionneur1">
                <option></option>
                <option value="volets">Volets</option>
                <option value="porte">Porte</option>
                <option value="lumiere">Lumiere</option>
                <option value="temperature">Temperature</option>
            </select>
        </label><br/><br/>

        <input type="submit" value="Supprimer"><br/><br/>
    </form>

</section>



<?php include 'Footer.php';?>

</body>


</html>
