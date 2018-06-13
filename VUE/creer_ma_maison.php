<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Créer ma maison</title>
    <link rel="stylesheet" href="css/Creer_maison.css"/>
</head>

<body>
<?php include 'Header_2.php';
include '../CONTROLEUR/Access_denied.php';
include '../CONTROLEUR/affichage_cmm.php'?>

<main>
    <div class = "gauche">
        <h2>Ajouter une pièce :</h2>
        <form method="post" action="../CONTROLEUR/creer_ma_maison_post.php">
            <label for="newPiece">Nom de la pièce : </label>
            <input type="text" name = "newPiece"><br/><br/>
            <label for="superficie">Superficie de la pièce : </label>
            <input type="text" name = "superficie"><br/><br/>
            <input type="submit" value="Ajouter" > <br/>
        </form>

        <h2>Ajouter un capteur :</h2>
        <form method="post" action="../CONTROLEUR/creer_ma_maison_post.php">
            <label for = "pieceCapteur">Choisissiez une pièce :</label>
            <select name = "pieceCapteur">
                <?php afficherPiece();?>
            </select><br/><br/>
            <label for = "capteur">Choissiez un type de capteur :</label>
            <select name = "capteur">
                <?php afficherCapteur();?>
                </label>
            </select><br/><br/>
            <input type="submit" value="Ajouter" > <br/>
        </form>

        <h2>Ajouter un actionneur :</h2>
        <form method="post" action="../CONTROLEUR/creer_ma_maison_post.php">
            <label for = "pieceActionneur">Choisissiez une pièce :</label>
            <select name = "pieceActionneur">
                <?php afficherPiece();?>
                </select><br/><br/>
            <label for = "actionneur">Choissiez un type d'actionneur :</label>
            <select name = "actionneur">
                <?php afficherActionneur();?>
                </label>
            </select><br/><br/>
            <input type="submit" value="Ajouter" > <br/>
        </form>
    </div>

    <div class = "droite">
        <h2>Supprimer une pièce :</h2>
        <form method="post" action="../CONTROLEUR/../CONTROLEUR/creer_ma_maison_post.php">
            <label for="piecesuppr">Piece :</label>
                <select name="nompiece1">
                    <?php afficherPiece();?>
                </select><br/><br/>
            <input type="submit" value="Supprimer"><br/><br/>
        </form>

        <h2>Supprimer un capteur :</h2>
        <form method="post" action="../CONTROLEUR/creer_ma_maison_post.php">
            <label for="piececapteur">Piece :</label>
            <select name="piececapteur">
                <?php afficherPiece();?>
            </select><br/><br/>

            <label for="capteursuppr">Type de capteur :</label>
            <select name="capteursuppr">
                <?php afficherCapteur();?>
            </select>
             <br/><br/>
            <input type="submit" value="Supprimer" > <br/><br/>
        </form>

        <h2>Supprimer un actionneur :</h2>
        <form method="post" action="../CONTROLEUR/creer_ma_maison_post.php">
            <label for="pieceactionneur">Piece :</label>
            <select name="pieceactionneur">
                <?php afficherPiece(); ?>
            </select><br/><br/>

            <label for="typeactionneur1">Type d'actionneur :</label>
            <select name="typeactionneur1">
                <?php afficherActionneur();?>
            </select>
            <br/><br/>
            <input type="submit" value="Supprimer"><br/><br/>
        </form>

    </div>
</main>

<?php include 'Footer.php';?>
</body>
</html>
