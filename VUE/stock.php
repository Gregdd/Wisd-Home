<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/stock.css" />
</head>

<body>

<?php include 'Header_admin2.php';?>

<main>
    <span>Capteurs en stock : </span><br/><br/>
    <table>
        <tr id = "ligne">
            <td>Nom du capteur</td>
            <td>Quantité en stock</td>
        </tr>
        <?php include '../CONTROLEUR/stock_table.php';?>
    </table>

</main>

<?php include 'Footer.php';?>

</body>

</html>
