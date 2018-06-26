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

function connexion($pseudo){
    include '../CONTROLEUR/database.php';
    $entrees=$bdd->query("SELECT * FROM utilisateur WHERE pseudo LIKE '$pseudo'");
    return $entrees;
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
    $entrees=$bdd->query("SELECT capteurNom,stock,capteurtypeID FROM capteur");
    return $entrees;
}

function getInfoActionneur(){
    include '../CONTROLEUR/database.php';
    $entrees=$bdd->query("SELECT actionneurtypeID, actionneurNom FROM actionneur");
    return $entrees;
}

function addCapteur($nom,$unit,$stock)
{
    include '../CONTROLEUR/database.php';
    $sql = $bdd->prepare('INSERT INTO capteur(capteurNom, unit, stock) VALUES (:nom, :unite, :stock)');
    $sql->execute(array('nom' => $nom, 'unite' => $unit, 'stock' => $stock));
    $sql->closeCursor();
}

function getReponse($pseudo)
{
    include '../CONTROLEUR/database.php';
    $reponse = $bdd->prepare('SELECT Reponse FROM utilisateur WHERE pseudo=?');
    $reponse->execute(array($pseudo));
    $reponse = $reponse->fetch();
    return $reponse;
}

function getQuestion($pseudo){
    include '../CONTROLEUR/database.php';
    $question = $bdd->prepare('SELECT question FROM utilisateur WHERE pseudo=?');
    $question->execute(array($pseudo));
    $question=$question->fetch();
    $question=$question[0];
    return $question;
}

function getMdp($pseudo){
    $req = $bdd->prepare('SELECT Mot_de_passe FROM utilisateur WHERE pseudo = ?') or die(print_r($bdd->errorInfo()));
    $req->execute(array($pseudo));
    $mdp = $req->fetch();
    return $mdp;
}

function getInfoPiece($id){
    include '../CONTROLEUR/database.php';
    $houseID = gethouseID($id);
    $req = $bdd->prepare('SELECT id,nom,superficie FROM pieces WHERE idhouse = ?');
    $req->execute(array($houseID[0]));
    return $req;
} //a modifier quand l'utilisateur pourra choisir sa maison

function majProfil($colonne,$new,$pseudo){
    include '../CONTROLEUR/database.php';
    $sql = 'UPDATE utilisateur SET '.$colonne.' = \''.$new.'\' WHERE pseudo LIKE \''.$pseudo.'\'';
    $req = $bdd->prepare($sql);
    $req->execute();
}

function addPiece($nom,$superficie,$id){
    include '../CONTROLEUR/database.php';
    $idhouse = getHouseID($id);
    $sql = $bdd->prepare('INSERT INTO pieces(nom, superficie, idhouse) VALUES (:nom, :superficie, :idhouse)');
    $sql->execute(array('nom'=>$nom, 'superficie'=>$superficie, 'idhouse'=>$idhouse[0] )) ;
    $sql->closeCursor();
}

function addCapteurPiece($idCapteur,$idPiece){
    include '../CONTROLEUR/database.php';
    $nomCapteur = getNomCapteur($idCapteur);
    $req = $bdd->prepare('INSERT INTO capteurpiece(idpiece, idcapteur, typecapteur ) VALUES(:nompiece, :idcapteur, :type )');
    $req->execute(array(
        'idcapteur' => $idCapteur,
        'nompiece' => $idPiece,
        'type' => $nomCapteur[0]
    ));
}

function getHouseID($id){
    include '../CONTROLEUR/database.php';
    $houseID = $bdd->prepare('SELECT maisonID FROM maison WHERE userID = ?');
    $houseID->execute(array($id));
    $houseID = $houseID->fetch();
    return $houseID;
}

function addActionneurPiece($idActionneur,$idPiece){
    include '../CONTROLEUR/database.php';
    $nomActionneur = getNomActionneur($idActionneur);
    $req = $bdd->prepare('INSERT INTO actionneurpiece(idpiece, idactionneur, typeactionneur ) VALUES(:nompiece, :idactionneur, :type )');
    $req->execute(array(
        'idactionneur' => $idActionneur,
        'nompiece' => $idPiece,
        'type' => $nomActionneur[0]
    ));
}

function getNomActionneur($id){
    include '../CONTROLEUR/database.php';
    $nomActionneur = $bdd->prepare('SELECT actionneurNom FROM actionneur WHERE actionneurtypeID = ?');
    $nomActionneur->execute(array($id));
    $nomActionneur=$nomActionneur->fetch();
    return $nomActionneur;
}

function getNomCapteur($id){
    include '../CONTROLEUR/database.php';
    $nomCapteur = $bdd->prepare('SELECT capteurNom FROM capteur WHERE capteurtypeID = ?');
    $nomCapteur->execute(array($id));
    $nomCapteur=$nomCapteur->fetch();
    return $nomCapteur;
}

function deletePiece($nom){
    include '../CONTROLEUR/database.php';
    $req = $bdd->prepare("DELETE FROM pieces WHERE id = ?");
    $req->execute(array($nom));
    $supprCapteurs = $bdd->prepare('DELETE FROM capteurpiece WHERE idpiece = ?');
    $supprCapteurs->execute(array($nom));
    $supprActionneur = $bdd->prepare('DELETE FROM actionneurpiece WHERE idpiece = ?');
    $supprActionneur->execute(array($nom));
}

function deleteCapteur($piece,$capteur){
    include '../CONTROLEUR/database.php';
    $req = $bdd->prepare('DELETE FROM capteurpiece WHERE idpiece = :piece AND idcapteur= :capteur');
    $req->execute(array(
        "piece" => $piece,
        "capteur" => $capteur
    ));
    $req->closeCursor();
}

function deleteActionneur ($piece,$actionneur){
    include '../CONTROLEUR/database.php';
    $req = $bdd->prepare('DELETE FROM actionneurpiece WHERE idpiece = :piece AND idactionneur = :actionneur');
    $req->execute(array(
        "piece" => $piece,
        "actionneur" => $actionneur
    ));

}

function del_question(){
    include '../CONTROLEUR/database.php';
    $req = $bdd->prepare('DELETE FROM faq WHERE ID = :ID'); // on sélectionne le paramètre en fonction duquel on va supprimer le device
$affectedLines = $req -> execute(array('ID' => $_POST['ID'])); // on effectue la suppression
$return = $req->fetch();

header('Location: ../VUE/messagerie_back.php'); // retour à la page articles

}

function post_question(){
    include '../CONTROLEUR/database.php';
    $req = $bdd->prepare('INSERT INTO faq (question) VALUES (?)');
	$req -> execute(array($_POST['question']));

    header('Location: ../VUE/messagerie_back.php'); // retour à la page articles

}

function post_reponse(){
    include '../CONTROLEUR/database.php';
$req = $bdd->prepare('UPDATE  faq SET reponse=?  WHERE ID = ?');
$req -> execute(array($_POST['reponse'], $_POST['reponseid']));
header('Location: ../VUE/messagerie_back_admin.php'); // retour à la page articles
}

function reponseid(){
  include '../CONTROLEUR/database.php';
  $reponse = $bdd->query('SELECT * FROM faq');
  while ($donnees = $reponse->fetch())
  {
      echo('<option value='. $donnees['ID'] . '>' . $donnees['ID'] . '</option>');
  }
}
function getMessage(){
    include 'database.php';
    $entrees=$bdd->query("SELECT Date_Message, ID, Objet, Message FROM messagerie");
    return $entrees;
}
