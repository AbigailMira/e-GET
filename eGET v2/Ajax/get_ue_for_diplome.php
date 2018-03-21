<?php
include ("../Includes/functions.php");
?>

<?php

$code_diplome=$_GET["code_diplome"];

afficheselect($conn, "UE", "Code_UE", "Code_UE", "Intitule", "WHERE diplome_code_diplome=$code_diplome");
 ?>
