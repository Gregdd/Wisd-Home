<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Recherche.css" />
</head>

<body>

<?php include 'Header_admin.php';?>

<main>

    <h1>Rechercher un client :</h1>
    <form action="rechercher_post.php" method="post">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom"><br><br>
        <label for="nom">Identifiant : </label>
        <input type="text" name="pseudo" id="pseudo"><br><br>
        <input type="submit" value ="Rechercher"><br>
</main>

<?php include 'Footer.php';?>

</body>

</html>
