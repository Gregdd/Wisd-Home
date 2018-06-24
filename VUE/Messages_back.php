<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Messagerie</title>
    <link rel="stylesheet" href="css/Messages_back.css" />
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</head>
	
<body>

<?php include ('Header_admin2.php');?>
<?php include ('database.php');?>
<main>
	<h1>Mes messages</h1>
    <table>
        <tr id = "ligne">
            <td>Date</td>
            <td>Id client</td>
            <td>Objet</td>
            <td>Message</td>
        </tr>
        <?php include '../CONTROLEUR/Messages_back_post.php';?>
    </table>
</main>

<footer>
<?php include ('Footer.php');?>
</footer>	
</body>
</html>
