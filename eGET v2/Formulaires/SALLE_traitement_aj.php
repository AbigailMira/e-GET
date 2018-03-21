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
    $libelle=$_POST["Libelle_e"];


echo "<p>Vous avez saisi les informations suivante : <br>";
    //echo $codediplome."<br>";
    echo $numsalle."<br>";
    echo $capsalle."<br>";
    echo $ratta."<br>";
    echo $libelle."<br>";
    echo "</p>";

    $sql="insert into Salle (Nom_salle, Capacite, Rattachement)
    values ('$numsalle', '$capsalle', '$ratta')";
    "insert into Dispose de (Salle_Num_salle, Equipement_idEquipement)
    values ('$numsalle', '')";

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
