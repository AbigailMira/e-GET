<?php
 include("../Includes/eg_header.php");
 $titre="Enregistrement enseignant";

include("../Includes/eg_menu.php");

include("../Includes/eg_asidenav.php")
?>

  <body>
    <div>
<?php

    $nom=$_POST["Nom"];
    $prenom=$_POST["Prenom"];
    $statut=$_POST["Statut"];

    echo "<p>Vous avez saisi les informations suivante : <br>";
    echo $nom."<br>";
    echo $prenom."<br>";
    echo $statut."<br>";
    echo "</p>";

    /* Voyons si c'est une création ou une modif, et changeons la requête en fonction */
    if ($_POST["action"] === "creation") {
      /* creation : on insère */
      $sql="insert into Enseignant (Nom, Prenom, Statut) values ('$nom', '$prenom', '$statut')";
    } else {
      /* modification: on update where CodeDiplome=$codediplome. */
      $sql="update Enseignant set Nom='$nom', Prenom='$prenom', Statut='$statut' where idEnseignant='$idEnseignant'";
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
