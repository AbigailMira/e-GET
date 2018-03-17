<?php
 include("eg_header.php");
 $titre="Enregistrement diplome";
?>

  <body>
    <div>
<?php

    $codedip=$_POST["CodeDip"];
    $nom=$_POST["Nom"];
    $annee=$_POST["Annee"];
    $resp=$_POST["Resp"];

echo "<p>Vous avez saisi les informations suivante : <br>";
    echo $codedip."<br>";
    echo $nom."<br>";
    echo $annee."<br>";
    echo $resp."<br>";
echo "</p>";

    $sql="insert into Diplome (code_diplome, nom, annee, responsable) values ('$codedip','$nom', '$annee', '$resp')";

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement".$conn->error;
}
  ?>

    <p><a href="eg_accueil.php">Retour à la page d'accueil</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("eg_footer.php");
?>
