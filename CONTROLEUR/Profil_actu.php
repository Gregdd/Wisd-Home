<?php

include 'database.php';
include '../MODELE/fonctionSQL.php';
session_start();

	$userid = $_SESSION['ID'];
	
	if(!empty($_POST['nom'])){
		$newnom = $_POST['nom'];
        majProfil('Nom',$newnom,$userid);
		$_SESSION['nom']=$newnom;
	}
	if(!empty($_POST['prenom'])){
		$newprenom = $_POST['prenom'];

        majProfil('Prenom',$newprenom,$userid);
		$_SESSION['prenom']= $newprenom;
	}
	if(!empty($_POST['bday'])){
		$newbday = $_POST['bday'];
        majProfil('Date_naissance',$newbday,$userid);
		$_SESSION['bday']= $newbday;
	}
	if(!empty($_POST['mail'])){
		$newmail = $_POST['mail'];
        majProfil('mail',$newmail,$userid);
		$_SESSION['mail']= $newmail;
	}
	if(!empty($_POST['adresse'])){
		$newadresse = $_POST['adresse'];
        majProfil('Adresse',$newadresse,$userid);
		$_SESSION['Adresse']= $newadresse;
	}
	if(!empty($_POST['code_postal'])){
		$newpostal = $_POST['code_postal'];
        majProfil('Code_postal',$newpostal,$userid);
		$_SESSION['Code_postal']= $newpostal;
	}
	if(!empty($_POST['ville'])){
		$newville = $_POST['ville'];
        majProfil('Ville',$newnom,$userid);
		$_SESSION['Ville']= $newville;
	}

	header('Location: ../VUE/Profil.php');

	?>
