<!DOCTYPE html>
<?php include '../CONTROLEUR/database.php';?>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Catalogue</title>
    <link rel="stylesheet" type="text/css" href="css/MyHome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

<?php include 'Header_2.php';?>
<?php include('../CONTROLEUR/Access_denied.php');?>

<main>
    <h2>Choix de la pièce</h2>
    <br/>
    <ul id = 'ul1'>
        <?php include ('../CONTROLEUR/MyHomeContenu.php');?>
        <li  class="carre">
            <a href="creer_ma_maison.php" ><img  src="img/boutonplus.png"> </a>
        </li>
    </ul>
</main>

<?php include 'Footer.php';?>

</body>
</html>
