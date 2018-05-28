<?php
session_start();
$objet = $_POST['objet'];
$message = $_POST['message'];
$id = $_SESSION['ID'];
$date = date("Y-m-d H:i:s");
try
{
	$bdd = new PDO('mysql:host=localhost;port=8889;dbname=wisdhome;charset=utf8','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); #mettre le port 8889
}
catch(Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

if(!empty($objet) && !empty($message)){
	$req = $bdd->prepare('INSERT INTO messagerie(Objet, ID, Message, Date) VALUES(Objet = ?, ID= ?; Message = ?, Date = ?');
	$req->execute(array($objet, $id, $message, $date));
}

echo  "Message envoyé";
header ('Location: Accueil_2.php');
exit();
?>
