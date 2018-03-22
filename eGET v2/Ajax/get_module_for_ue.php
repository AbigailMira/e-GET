<?php
include ("../Includes/functions.php");
?>

<?php

$code_ue=$_GET["Code_UE"];

afficheselect($conn, "Module", "idModule", "idModule", "concat(idModule,' ', Intitule",
" JOIN Determination_caract on Code_Module.idModule = Determination_caract.Module_idModule
WHERE Determination_caract.UE_Code_UE='XYZ'");
 ?>
