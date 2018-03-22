<?php
 include("../Includes/eg_header.php");
 $titre="Enregistrement Groupe étudiant";

include("../Includes/eg_menu.php");

include("../Includes/eg_asidenav.php")
?>

  <body>
    <div>
<?php

//$codediplome=$_POST["CodeDiplome"]; Auto-increment
$codeGroupe=$_POST["Code_groupe"];
$effectif=$_POST["Effectif"];
$UEsuivie=$_POST["UE_Code_UE"];


echo "<p>Vous avez saisi les informations suivantes : <br>";
//echo $codediplome."<br>";
echo $codeGroupe."<br>";
echo $effectif."<br>";
echo $UEsuivie."<br>";
echo "</p>";

    /* Voyons si c'est une création ou une modif, et changeons la requête en fonction */
    if ($_POST["action"] === "creation") {
      /* creation : on insère */
      $sql="insert into Gr_etudiants (Code_groupe, Effectif)
      values ('$codeGroupe', '$effectif')";
      $sql="insert into Composition (GR_etudiant_Code_groupe, UE_Code_UE)
      values ('$codeGroupe', '$UEsuivie')";
    } else {
      /* modification: on update where CodeDiplome=$codediplome. */
      $sql="update Gr_etudiants set Code_groupe='$codeGroupe', Effectif='$effectif'
      where Code_groupe='$codeGroupe'";
      $sql="update // Composition set GR_etudiant_Code_groupe='$codeGroupe', UE_Code_UE='$UEsuivie'
      where GR_etudiant_Code_groupe='$codeGroupe'";
    }

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
}
  ?>

    <p><a href="ETU_form_aj.php">Retour</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("../Includes/eg_footer.php");
?>
