<?php
include 'database.php';
include '../MODELE/fonctionSQL.php';
session_start();

$pseudo = $_POST['pseudo'];

if(isset($_POST['pseudo'])){
    $reponse = getReponse($pseudo);
    $question = getQuestion($pseudo);
}
if(!empty($_POST['reponse'])){
    $rep=$_POST['reponse'];
    if($rep==$reponse[0] AND $_POST['pass']==$_POST['confirm_pass']){
        $newpass = $_POST['pass'];
        majMdp($newpass,$pseudo);
        include('../VUE/Connexion.php');
    }
    else{
        include('../VUE/MDP_perdu2.php');
    }
}
else{
    include('../VUE/MDP_perdu2.php');
}
?>
