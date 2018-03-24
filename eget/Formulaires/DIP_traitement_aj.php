<?php
 include("../Includes/eg_header.php");
 $titre="Enregistrement enseignant";

include("../Includes/eg_menu.php");

include("../Includes/eg_asidenav.php")
?>

  <body>
    <div>
<?php

    $codediplome=$_POST["CodeDiplome"];
    $nomdiplome=$_POST["NomDiplome"];
    $annee=$_POST["Annee"];
    $responsable=$_POST["idEnseignant"];

echo "<p>Vous avez saisi les informations suivante : <br>";
    echo $codediplome."<br>";
    echo $nomdiplome."<br>";
    echo $annee."<br>";
    echo $responsable."<br>";
echo "</p>";

    /* Voyons si c'est une création ou une modif, et changeons la requête en fonction */
    if ($_POST["action"] === "creation") {
      /* creation : on insère */
      $sql="insert into Diplome (Code_Diplome, Nom_Diplome, Annee, Enseignant_idEnseignant) values ('$codediplome', '$nomdiplome', '$annee', $responsable)";
    } else {
      /* modification: on update where CodeDiplome=$codediplome. */
      $sql="update Diplome set Nom_Diplome='$nomdiplome', Annee='$annee', Enseignant_idEnseignant=$responsable where Code_Diplome='$codediplome'";
    }

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
}
  ?>

    <p><a href="PERS_form_aj.php">Retour</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("../Includes/eg_footer.php");
?>
