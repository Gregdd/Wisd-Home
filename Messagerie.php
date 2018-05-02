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

<?php include 'Header_2.php';?>
   
<main>

    <fieldset>
        <legend>Contact</legend>
        <br /><input type="text" name="objet" id="objet" placeholder="Objet" size="35"> <br /> <br/>
        <textarea id="message" cols="100" rows="20"> >"Message pour l'administrateur..." </textarea> <br/>
        <input type="submit" value="Envoyer"/>
        </form>
    </fieldset>

<?php
	$(document).ready(function() {
   $("#message").click(function() {
      $("p.info").remove();
   });
});
?>

</main>

<?php include 'Footer.php';?>
	
</body>
</html>
