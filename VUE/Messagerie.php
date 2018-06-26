?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma messagerie</title>
    <link rel="stylesheet" href="Messagerie.css" />
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</head>
	
<body>
<?php include '../VUE/Header_2.php';?>
<?php include '../CONTROLEUR/Access_denied.php';?>
   
<main>
    <fieldset>
        <legend>Contact</legend>
        <form method="post" action="Messages.php">
        <br /><input type="text" name="objet" id="objet" placeholder="Objet" size="35"> <br /> <br/>
        <textarea id="message" name="message" cols="100" rows="20" placeholder=">Message pour l'administrateur."> </textarea> <br/>
        <input type="submit" value="Envoyer"/>
        </form>
    </fieldset>
</main>

<footer>
<?php include '../VUE/Footer.php';?>
</footer>	
</body>
</html>
