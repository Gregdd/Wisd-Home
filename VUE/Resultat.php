
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/resultat.css" />
</head>

<body>

<?php include '../VUE/Header_admin2.php';?>

<main>



    <h1>Résultat de la recherche : </h1>
    <p>
        Nom : <?php  echo $_SESSION['client']['Nom']; ?> <br/>
        Prénom : <?php echo $_SESSION['client']['Prenom']; ?> <br/>
        Pseudo : <?php echo $_SESSION['client']['pseudo']; ?>
    </p>

</main>

<?php include 'Footer.php';?>

</body>

</html>
