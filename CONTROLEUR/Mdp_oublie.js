function test(mail){
  
  var reg = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
  if(reg.test(mail.value)==false){
      document.getElementById("failmail").style.display="inline"}
      
  else if (isset($_POST['okmail'])) {
    $header="MIME-Version: 1.0\r\n";
        $header.='From:"gmail.com"<support@gmail.com>'."\n";
        $header.='Content-Type:text/html; charset=utf-8'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
<html>
        <body>
            <div align="center">
                    Veuillez appuyer sur le lien, pour changer de mot de passe :
                    <a href="http://localhost/homie/index.php?p=resetPassword"> changervotremotdepasse</a>
            </div>
        </body>
</html>

';
        mail($_POST['mail'], "Changement de mot de passe", $message, $header);
        $reponse = 'le mail a été envoyé !';
    }

    return $reponse;

  }

}
