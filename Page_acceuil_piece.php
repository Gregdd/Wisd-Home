<!DOCTYPE html>
<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=wisdhome', 'root', 'root');
}catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Catalogue</title>
    <link rel="stylesheet" type="text/css" href="Page_acceuil_capteur.css">
    <link rel="stylesheet" type="text/css" href="styletableau.css">
    <link rel="stylesheet" type="text/css" href="popupbox.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="Image/icon.png" />

</head>
<body>
<header>
    <?php include 'Header_2.php';?>
</header>


<article>

    <h2> Capteurs  </h2><hr>
    <?php

    $id = $_GET["ideal"];

    $req = $bdd->query("SELECT typecapteur FROM capteurpiece WHERE idpiece='$id' ");
    echo '<ul>';
    while ($capteur = $req->fetch())
    {
        echo '<li class="carre">
            <a href="">
            <center><img src="" class="pics" style="width:20px"/></center><br/>
                <p class="titre">'.$capteur['typecapteur'].'</p></a>
        </li> ';
    }
    echo '</ul>';

    $req->closeCursor();

    ?>

    <ul>
        <li class="carre" >
            <button id="myBtn">Open Modal</button>
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form class="modal-content animate" >

                        <div >
                            <img src="Image/temp.png" alt="Avatar" class="avatar" id="images_petit">
                            <h1 style="text-align:center">Capteur de </h1>
                        </div>

                        <div >
                            <label class="name" for="firstName">Prénom : </label><input id="firstName" name="firstName" type="text"/>
                            <input type="text" placeholder="Enter Valeur" name="uname">
                            </br></br><button type="submit">valider</button>
                        </div>

                    </form>
                </div>

            </div>
        </li>





    </ul>



</article>


<article>

    <h2> Actionneurs </h2><hr>
    <?php

    $id = $_GET["ideal"];

    $req = $bdd->query("SELECT typeactionneur FROM actionneurpiece WHERE idpiece='$id' ");
    echo '<ul>';
    while ($actionneur = $req->fetch())
    {
        echo '<li class="carre">
            <a href="">
            <center><img src="" class="pics" style="width:20px"/></center><br/>
                <p class="titre">'.$actionneur['typeactionneur'].'</p></a>
        </li> ';
    }
    echo '</ul>';

    $req->closeCursor();

    ?>





</article>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<footer>
    <?php include 'Footer.php';?>
</footer>
</body>
</html>