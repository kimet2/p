<?php
@session_start();
if(isset($_REQUEST["esborrar"])){
    $z = $_REQUEST["esborrar"];
    unset($_SESSION['codi'][$z]);
      unset($_SESSION['nom'][$z]);
      unset($_SESSION['preu'][$z]);
      unset($_SESSION['foto'][$z]);
      header("Location:index.php");
}
?>