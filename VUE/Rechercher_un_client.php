<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/Wisd-Home-master/VUE/css/Recherche.css" />
</head>

<body>

<?php include 'Header_admin2.php';?>

<main>

    <h1>Rechercher un client :</h1>
    <form action="/Wisd-Home-master/CONTROLEUR/recherche_post.php" method="post">
        <label for="nom">Nom : </label>
        <input type="text" name="nom"><br><br>
        <label for="pseudo">Identifiant : </label>
        <input type="text" name="pseudo"><br><br>
        <input type="submit" value ="Rechercher"><br>
    </form>
</main>

<?php include 'Footer.php';?>

</body>

</html>
