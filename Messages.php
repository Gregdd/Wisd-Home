<?php
session_start();
include 'database.php';

$objet = $_POST['objet'];
$message = $_POST['message'];
//$id = $_SESSION['ID'];
$date = date("Y-m-d H:i:s");

if(!empty($objet) && !empty($message)){
	$req = $bdd->prepare('INSERT INTO messagerie(Objet, ID, Message, Date_Message) VALUES(?,?,?,?)') or die(print_r($bdd->errorInfo()));
	$req->execute(array($objet,$_SESSION['ID'],$message,$date));
	echo 'Le message a été envoyé.';
	
}
else{
	echo 'Veuillez entrer les informations !';
}
?>
