<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>Mon profil</title>
<link rel="stylesheet" href="css/Profil.css" />

</head>
<body>
<header> 
<?php include '../VUE/Header_2.php';?>
<?php include '../CONTROLEUR/Access_denied.php';?>
</header>
<h1>Mot de passe</h1>
<form method="post" action="../CONTROLEUR/mdp_actu.php">
 <div class="Colonne2">
<fieldset>
<legend>Informations sur votre compte</legend>
<p> <span class="soustitre">Modifier mot de passe : </span><br/><br/>
<label for="amdp"> Ancien mot de passe : </label>
<input type="password" name="amdp" id="amdp" placeholder="*******" size="25"> <br /><br />
<label for="nmdp"> Nouveau mot de passe : </label>
<input type="password" name="nmdp" id="nmdp" placeholder="*******" size="25" minlength="8"/> <br /><br />
<label for="cmdp"> Confirmer mot de passe : </label>
<input type="password" name="cmdp" id="cmdp" placeholder="*******" size="25" minlength="8" required/> <br /><br />
<input type="submit" value="Valider"/><br/><br />

</p>
</fieldset>
</div>
</form>


<br/>
<br/>

<footer>
<?php include '../VUE/Footer.php';?>
</footer>
</body>

</html>
