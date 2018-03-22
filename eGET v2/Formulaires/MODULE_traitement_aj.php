<?php
 include("../Includes/eg_header.php");

include("../Includes/eg_menu.php");

include("../Includes/eg_asidenav.php")
?>

  <body>
    <div>
<?php

    $idModule=$_POST["idModule"];
    $intitule=$_POST["Intitule"];
    $descriptif=$_POST["Descriptif"];
    $quotaHeures=$_POST["Quota_heures"];
		$eqtd=$_POST["EQTD"];
		$ue=$_POST["Code_UE"];
		$coefficient=$_POST["Coefficient"];
		$equipements=$_POST["idEquipement"];


echo "<p>Vous avez saisi les informations suivante : <br>";
    //echo $codediplome."<br>";
    echo $idModule."<br>";
    echo $intitule."<br>";
    echo $descriptif."<br>";
    echo $quotaHeures."<br>";
    echo $eqtd."<br>";
    echo $ue."<br>";
    echo $coefficient."<br>";
    print_r($equipements)."<br>";
    echo "</p>";

    if ($_POST["action"] === "creation") {
	    $sql="insert into Module (idModule, Intitule, Descriptif, Quota_heures, EQTD) values ('$idModule', '$intitule', '$descriptif', '$quotaHeures', '$eqtd')";
		} else {
			$sql="update Module set Intitule='$intitule', Descriptif='$descriptif', Quota_heures='$quotaHeures', EQTD='$eqtd' where idModule='$idModule'";
		}

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
    }

    /* on delete dans les tables de jointures */

    $sql = "delete from Determination_caract where Module_idModule='$idModule' and UE_Code_UE='$ue'";
    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
    }

    $sql = "delete from Requiert where Module_idModule='$idModule'";
    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
    }

    /* on réinsert dans les tables de jointures */
    
    $sql = "insert into Determination_caract (Coefficient, Module_idModule, UE_Code_UE) values('$coefficient', '$idModule', '$ue')";
    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
    }


    foreach($equipements as $idEquipement) {
      /* on fait un insert par equipement coché dans le multi-select */
      $sql = "insert into Requiert (Equipement_idEquipement, Module_idModule) values ('$idEquipement', '$idModule')";
      if ($conn->query($sql) === true){
        echo "Enregistrement réussi";
      }
      else {
        echo "Erreur d'enregistrement".$conn->error;
      }
    }
  ?>

    <p><a href="MODULE_form_aj.php">Retour</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("../Includes/eg_footer.php");
?>
