<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="resultat.css" />
</head>

<body>

<?php include 'Header_admin.php';?>

<main>



    <h1>Résultat de la recherche : </h1>
    <p>
        Nom : <?php  echo $_SESSION['client']['Nom']; ?> <br/>
        Prénom : <?php echo $_SESSION['client']['Prenom']; ?> <br/>
        Id : <?php echo $_SESSION['client']['ID']; ?>
    </p>

</main>

<?php include 'Footer.php';?>

</body>

</html>
