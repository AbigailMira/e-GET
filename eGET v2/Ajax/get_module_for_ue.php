<?php
include ("../Includes/functions.php");
?>

<?php

$code_ue=$_GET["Code_UE"];

afficheselect($conn, "Determination_caract", "Module_idModule", "idModule", "Intitule", "WHERE diplome_code_diplome=$code_diplome");
 ?>
