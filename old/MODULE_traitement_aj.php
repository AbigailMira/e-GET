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
    $quotaHeures=$_POST["QuotaHeures"];
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
	    $sql="insert into Module (Intitule, Descriptif, Quota_heures, ...) values ('$numsalle', '$capsalle', '$ratta')";
		} else {
			$sql="update Module set... where idModule='$idModule'";
		}

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
    }

		/* TODO delete/inserts dans Requiert et Determination_caract */

  ?>

    <p><a href="MODULE_form_aj.php">Retour</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("../Includes/eg_footer.php");
?>
