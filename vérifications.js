
/*<?php
    try
    {
        $bdd = new PDO("mysql:host=localhost; dbname=wisdhome; charset=utf8","root","monmotdepasse");
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $id = $bdd->query(SELECT * From utilisateur WHERE id = identifiant);
?>*/



var submit = document.getElementById('check');

function compareMDP() {
    var identifiant = getElementById('identifiant');
    var mdp1 = document.getElementById('pass').value,
        mdp2 = document.getElementById('pas2').value;

    /*for(var id in $id ){
        if (identifiant === id){
            alert("Cet identifiant est déjà pris");
        }
    }*/
    if (mdp1 !== mdp2) { // Si les deux champs contiennent quelque chose
        alert("Les mots de passe ne correspondent pas");
        submit.checked=false;
    }


}

submit.addEventListener('click',compareMDP);
