<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma messagerie</title>
    <link rel="stylesheet" href="Messagerie.css" />
    <link rel="stylesheet"href="Stylesheet.css"/>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</head>
	
<body>
	
<header>
    <h1>Wisd'home</h1>
    <image Logo="logo.jpg" />
</header>

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
	<footer>
	</footer>
</body>
</html>
