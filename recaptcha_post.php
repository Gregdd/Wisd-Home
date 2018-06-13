<?php
  require('../recaptcha/autoload.php');
  if(isset($_POST['submitpost'])) {
      if(isset($_POST['g-recaptcha-response'])) {
          $recaptcha = new \ReCaptcha\ReCaptcha('clé_secrète');
          $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
          if ($resp->isSuccess()) {
              var_dump('Captcha Valide');
          } else {
              $errors = $resp->getErrorCodes();
              var_dump('Captcha Invalide');
              var_dump($errors);
          }
      } else {
          var_dump('Captcha non rempli');
      }
  }
?>


