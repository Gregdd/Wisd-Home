<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/Wisd-Home-master/VUE/css/Recherche.css" />
</head>

<body>

<?php include '../VUE/Header_admin2.php';?>

<main>

    <h1>Ajouter un nouveau capteur : </h1>
    <form method = "post" action = "../CONTROLEUR/new_capteur_post.php">
        <label for="type">Type de capteur : </label>
        <input type="text" name="type"><br><br>
        <label for="unite">Unité du capteur : </label>
        <input type="text" name="unite"><br><br>
        <label for="stock">Quantié en stock : </label>
        <input type="text" name="stock"><br><br>
        <input type="submit" value="Ajouter"><br/><br/>
    </form>
</main>

<?php include '../VUE/Footer.php';?>

</body>

</html>
