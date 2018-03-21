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
    $codeUE=$_POST["CodeUE"];
    $nomUE=$_POST["NomUE"];
    $descUE=$_POST["DescUE"];
    $ects=$_POST["ectsUE"];
    $diplome=$_POST["code_diplome"];

echo "<p>Vous avez saisi les informations suivante : <br>";
    //echo $codediplome."<br>";
    echo $codeUE."<br>";
    echo $nomUE."<br>";
    echo $descUE."<br>";
    echo $ects."<br>";
    echo $diplome."<br>";
    echo "</p>";

    $sql="insert into UE (Code_UE, Intitule, Descriptif, ECTS, Diplome_Code_Diplome)
    values ('$codeUE', '$nomUE', '$descUE', '$ects', '$diplome')";

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
