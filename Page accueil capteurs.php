<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Catalogue</title>
    <link rel="stylesheet" type="text/css" href="Page_acceuil_capteur.css">
    <link rel="stylesheet" type="text/css" href="style_tableau.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="Image/icon.png" />

</head>



<body>


<article>
    <h2>Choix de la pièce</h2>




    <ul>
        <li class="carre">
            <a href="">
                <p class="titre">Salon</p></a>
        </li>

        <li class="carre">
            <a href="">
                <p class="titre">Piece 1</p></a>
        </li>

        <li class="carre">
            <a href="">
                <p class="titre">Piece 2</p></a>
        </li>
        <li class="carre">
            <a href="">
                <p class="titre">Piece 3</p></a>
        </li>
        <li class="carre">
            <a href="">
                <p class="titre">Piece 4</p></a>
        </li>
    </ul>



</article>
<article>

    <h2> Capteurs  </h2><hr>
    <ul>

        <li class="carre" >
            <a href="">
                <center><img src="Image/goutte.png" alt="Humidité" title="Humidité" class="pics" style="width:30%"/></center><br/>
                <p class="titre">Humidité</p></a>
            <button onclick="document.getElementById('modal-wrapper').style.display='block'" >
                Humidité</button>

            <div id="modal-wrapper" class="modal">

                <form class="modal-content animate" action="/action_page.php">

                    <div class="imgcontainer">
                        <img src="Image/goutte.png" alt="Avatar" class="avatar">
                        <h1 style="text-align:center">Modal Popup Box</h1>
                    </div>

                    <div class="container">
                        <label class="name" for="firstName">Prénom : </label><input id="firstName" name="firstName" type="text"/>
                        <input type="text" placeholder="Enter Valeur" name="uname">
                        </br></br><button type="submit">valider</button>
                    </div>

                </form>

            </div>




        </li>


        <li class="carre">
            <a href="">
                <img src="Image/camera.png" alt="Camera" title="Caméra" class="pics" style="width:30%"/><br/>
                <p class="titre">Camera</p></a>
        </li>

        <li class="carre">
            <a href="">
                <img src="Image/temp.png" style="width:30%" alt="Température" title="Température" class="pics"/><br/>
                <p class="titre">Température</p></a>
        </li>

        <li class="carre">
            <a href="">
                <img src="Image/mouvement.png" style="width:30%"  alt="Capteur de mouvement" title="Capteur de mouvement" class="pics"/><br/>
                <p class="titre">Capteur de mouvement</p></a>
        </li>
    </ul>

    <ul>

        <li class="carre">
            <a href="">
                <img src="Image/luminosite.png" style="width:30%"  alt="Luminosite" title="Luminosité" class="pics"/><br/>
                <p class="titre">Luminosité</p></a>
        </li>

        <li class="carre">
            <a href="">
                <img src="Image/feu.png" style="width:30%"  alt="Capteur de fumee" title="Capteur de fumée" class="pics"/><br/>
                <p class="titre">Capteur de fumée</p></a>
        </li>

        <li class="carre">
            <a href="">
                <img src="Image/consoeau.png" style="width:30%" alt="Capteur de consommation d'eau" title="Capteur de consommation d'eau" class="pics"/><br>
                <p class="titre">Capteur de consomation d'eau</p></a>
        </li>

        <li class="carre">
            <a href="">
                <img src="Image/consoelec.png" style="width:30%"  alt="Capteur de consommation d'électricité" title="Capteur d'électricité" class="pics"/><br>
                <p class="titre">Capteur de consomation d'électricité</p></a>
        </li>
    </ul>

</article>

</br>

    <article>

        <h2> Actionneurs </h2><hr>
        <ul>

            <li class="carre" >
                <a href="">
                    <center><img src="Image/goutte.png" alt="Humidité" title="Humidité" class="pics" style="width:30%"/></center><br/>
                    <p class="titre">Humidité</p></a>
            </li>


            <li class="carre">
                <a href="">
                    <img src="Image/camera.png" alt="Camera" title="Caméra" class="pics" style="width:30%"/><br/>
                    <p class="titre">Camera</p></a>
            </li>

            <li class="carre">
                <a href="">
                    <img src="Image/temp.png" style="width:30%" alt="Température" title="Température" class="pics"/><br/>
                    <p class="titre">Température</p></a>
            </li>

            <li class="carre">
                <a href="">
                    <img src="Image/mouvement.png" style="width:30%"  alt="Capteur de mouvement" title="Capteur de mouvement" class="pics"/><br/>
                    <p class="titre">Capteur de mouvement</p></a>
            </li>
        </ul>

        <ul>

            <li class="carre">
                <a href="">
                    <img src="Image/luminosite.png" style="width:30%"  alt="Luminosite" title="Luminosité" class="pics"/><br/>
                    <p class="titre">Luminosité</p></a>
            </li>

            <li class="carre">
                <a href="">
                    <img src="Image/feu.png" style="width:30%"  alt="Capteur de fumee" title="Capteur de fumée" class="pics"/><br/>
                    <p class="titre">Capteur de fumée</p></a>
            </li>

            <li class="carre">
                <a href="">
                    <img src="Image/consoeau.png" style="width:30%" alt="Capteur de consommation d'eau" title="Capteur de consommation d'eau" class="pics"/><br>
                    <p class="titre">Capteur de consomation d'eau</p></a>
            </li>

            <li class="carre">
                <a href="">
                    <img src="Image/consoelec.png" style="width:30%"  alt="Capteur de consommation d'électricité" title="Capteur d'électricité" class="pics"/><br>
                    <p class="titre">Capteur de consomation d'électricité</p></a>
            </li>
        </ul>

    </article>

</body>

