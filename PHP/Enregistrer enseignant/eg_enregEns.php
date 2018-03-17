<?php
 include("eg_header.php");
 $titre="Enregistrement enseignant";
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

    $sql="insert into Enseignant (nom, prenom, statut) values ('$nom', '$prenom', '$statut')";

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
