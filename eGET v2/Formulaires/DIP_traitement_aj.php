<?php
 include("../Includes/eg_header.php");
 $titre="Enregistrement enseignant";

include("../Includes/eg_menu.php");

include("../Includes/eg_asidenav.php")
?>

  <body>
    <div>
<?php

    //$codediplome=$_POST["CodeDiplome"]; Auto-increment
    $nomdiplome=$_POST["NomDiplome"];
    //$annee=$_POST["Annee"];
    $responsable=$_POST["idEnseignant"];

echo "<p>Vous avez saisi les informations suivante : <br>";
    //echo $codediplome."<br>";
    echo $nomdiplome."<br>";
    //echo $annee."<br>";
    echo $responsable."<br>";
    echo "</p>";

    $sql="insert into Diplome (Nom_Diplome, Enseignant_idEnseignant)
    values ('$nomdiplome', '$responsable')";

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
}
  ?>

    <p><a href="DIP_form_aj.php">Retour</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("../Includes/eg_footer.php");
?>
