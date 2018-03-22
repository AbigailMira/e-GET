<?php
 include("../Includes/eg_header.php");
 $titre="Enregistrement enseignant";

include("../Includes/eg_menu.php");

include("../Includes/eg_asidenav.php")
?>

  <body>
    <div>
<?php

    $numSemCiv = $row["Num_Sem_civ"];
    $numSemSco = $row["Num_Sem_sco"];
    $annee = $row["Annee"];
    $dateD = $row["DateD"];

echo "<p>Vous avez saisi les informations suivante : <br>";
    echo $numSemCiv."<br>";
    echo $numSemSco."<br>";
    echo $annee."<br>";
    echo $dateD."<br>";
echo "</p>";

    /* Voyons si c'est une création ou une modif, et changeons la requête en fonction */
    if ($_POST["action"] === "creation") {
      /* creation : on insère */
      $sql="insert into Semaine (Num_Sem_sco, Annee, DateD) values ('$numSemSco', '$annee', $dateD)";
    } else {
      /* modification: on update where CodeDiplome=$codediplome. */
      $sql="update Semaine set Num_Sem_sco='$numSemSco', Annee='$annee', DateD=$dateD where Num_Sem_civ='$numSemCiv'";
    }

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
}
  ?>

    <p><a href="CAL_form_aj.php">Retour</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("../Includes/eg_footer.php");
?>
