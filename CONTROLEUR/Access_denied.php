<?php
if(!isset($_SESSION['pseudo'])){
    header('Location: ../VUE/Acces_refuse.php');
    exit();
}
?>
