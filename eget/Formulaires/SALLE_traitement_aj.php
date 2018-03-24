<?php
 include("../Includes/eg_header.php");

include("../Includes/eg_menu.php");

include("../Includes/eg_asidenav.php")
?>

  <body>
    <div>
<?php

    //$codediplome=$_POST["CodeDiplome"]; Auto-increment
    $numsalle=$_POST["NumSalle"];
    $capsalle=$_POST["CapSalle"];
    $ratta=$_POST["Rattachement"];
    $idEquipement=$_POST["idEquipement"];


echo "<p>Vous avez saisi les informations suivante : <br>";
    //echo $codediplome."<br>";
    echo $numsalle."<br>";
    echo $capsalle."<br>";
    echo $ratta."<br>";
    echo $idEquipement."<br>";
    echo "</p>";

    if ($_POST["action"] === "creation") {
	    $sql="insert into Salle (Num_salle, Capacite, Rattachement) values ('$numsalle', '$capsalle', '$ratta')";
		} else {
			$sql="update Salle set Capacite='$capsalle', Rattachement='$ratta' where Num_salle='$numsalle'";
		}

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
    }

		/* on enlève les vieux équipements avant de mettre les nouveaux */
    $sql="delete from Dispose_de where Salle_Num_salle='$numsalle'";

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
    }

		/*On met les nouveaux équipements - TODO: multi-select */
    $sql="insert into Dispose_de (Salle_Num_salle, Equipement_idEquipement)
    values ('$numsalle', '$idEquipement')";

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
    }

  ?>

    <p><a href="UE_form_aj.php">Retour</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("../Includes/eg_footer.php");
?>
