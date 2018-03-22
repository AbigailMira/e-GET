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
$UEsSuivies=$_POST["Code_UE"];


echo "<p>Vous avez saisi les informations suivantes : <br>";
//echo $codediplome."<br>";
echo $codeGroupe."<br>";
echo $effectif."<br>";
echo $UEsSuivies."<br>";
echo "</p>";

    /* Voyons si c'est une création ou une modif, et changeons la requête en fonction */
    if ($_POST["action"] === "creation") {
      /* creation : on insère */
      $sql="insert into Gr_etudiants (Code_groupe, Effectif)
      values ('$codeGroupe', '$effectif')";
    } else {
      /* modification: on update where CodeDiplome=$codediplome. */
      $sql="update Gr_etudiants set Code_groupe='$codeGroupe', Effectif='$effectif'
      where Code_groupe='$codeGroupe'";
    }

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
    }
    
    /* On enlève les anciennes jointures Composition */
    $sql = "delete from Composition where Gr_etudiants_Code_groupe='$codeGroupe'";

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
    }

    /* On insère les nouvelles UEs sélectionnées dans Composition */
    foreach($UEsSuivies as $codeUe) {
      /* on fait un insert par equipement coché dans le multi-select */
      $sql = "insert into Composition (Gr_etudiants_Code_groupe, UE_Code_UE) values ('$codeGroupe', '$codeUe')";
      if ($conn->query($sql) === true){
        echo "Enregistrement réussi";
      }
      else {
        echo "Erreur d'enregistrement".$conn->error;
      }
    }
  ?>

    <p><a href="ETU_form_aj.php">Retour</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("../Includes/eg_footer.php");
?>
