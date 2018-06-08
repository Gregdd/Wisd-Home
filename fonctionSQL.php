<?php


function inscription($pseudo,$pass,$nom,$prenom,$mail,$adresse,$ville,$code_post,$bday,$reponse,$question){
    include '../CONTROLEUR/database.php';
    $sql = $bdd->prepare('INSERT INTO utilisateur (pseudo, Mot_de_passe, Nom, Prenom, mail, Adresse, Ville, Code_postal, Date_naissance, Reponse, question) 
                                VALUES (:pseudo, :mdp, :nom, :prenom, :mail, :adresse, :ville, :code_post, :bday, :reponse, :question)');
    $sql->execute(array(
        'pseudo' => $pseudo,
        'mdp' => $pass,
        'nom' => $nom,
        'prenom' => $prenom,
        'mail' => $mail,
        'adresse' => $adresse,
        'ville' => $ville,
        'code_post' => $code_post,
        'bday' => $bday,
        'reponse' => $reponse,
        'question' => $question));

    $sql->closeCursor();
}

function rechercheByNOM($nom){
    include '../CONTROLEUR/database.php';
    $req=$bdd->query("SELECT * FROM utilisateur WHERE Nom='$nom'");
    $client = $req->fetch();
    $_SESSION['client']['Nom']=$client['Nom'];
    $_SESSION['client']['Prenom']=$client['Prenom'];
    $_SESSION['client']['pseudo']=$client['pseudo'];
    $req->closeCursor();
};

function rechercheByPSEUDO($pseudo){
    include '../CONTROLEUR/database.php';
    $req=$bdd->query("SELECT * FROM utilisateur WHERE pseudo='$pseudo'");
    $client = $req->fetch();
    $_SESSION['client']['Nom']=$client['Nom'];
    $_SESSION['client']['Prenom']=$client['Prenom'];
    $req->closeCursor();
};

function getInfoCapteur(){
    include '../CONTROLEUR/database.php';
    $entrees=$bdd->query("SELECT capteurNom, stock FROM capteur");
    $entrees->closeCursor();
    return $entrees;
}

function addCapteur($nom,$unit,$stock){
    include '../CONTROLEUR/database.php';
    $sql = $bdd->prepare('INSERT INTO capteur(capteurNom, unit, stock) VALUES (:nom, :unite, :stock)');
    $sql->execute(array('nom'=>$nom, 'unite'=>$unit, 'stock'=>$stock )) ;
    $sql->closeCursor();
}

function connexion($pseudo){
    include '../CONTROLEUR/database.php';
    $entrees=$bdd->query("SELECT * FROM utilisateur WHERE pseudo LIKE '$pseudo'");
    $entrees->closeCursor();
    return $entrees;

}
