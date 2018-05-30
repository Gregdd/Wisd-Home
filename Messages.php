<?php
session_start();
$objet = $_POST['objet'];
$message = $_POST['message'];
$id = $_SESSION['ID'];
$date = date("Y-m-d H:i:s");

include 'database.php';

if(!empty($objet) && !empty($message)){
	$req = $bdd->prepare('INSERT INTO messagerie(Objet, ID, Message, Date) VALUES(:objet, :iD; :message, :date)');
	$req->execute(array(
			'objet'=> $objet,
			'iD' => $id,
			'message' => $message,
			'date' => $date		
	));
}

echo  "Message envoyé";
header ('Location: Accueil_2.php');
exit();
?>
