<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>Mon profil</title>
<link rel="stylesheet" href="Profil.css" />

</head>
<body>
<header><?php include 'Header_2.php';?></header>
<div class="Colonne2">
<fieldset>
<legend>Informations sur votre compte</legend>
<p> <span class="soustitre">Modifier mot de passe : </span><br/><br/>
<label for="amdp"> Ancien mot de passe : </label>
<input type="password" name="amdp" id="amdp" placeholder="*******" size="25"> <br /><br />
<label for="nmdp"> Nouveau mot de passe : </label>
<input type="password" name="amdp" id="amdp" placeholder="*******" size="25" minlength="8"/> <br /><br />
<label for="cmdp"> Confirmer mot de passe : </label>
<input type="password" name="cmdp" id="cmdp" placeholder="*******" size="25" minlength="8" required/> <br /><br />
<input type="submit" value="Valider"/><br/><br />

</p>
</fieldset>
</div>


<br/>
<br/>

<footer>
<?php include 'Footer.php';?>
</footer>
</body>

</html>
