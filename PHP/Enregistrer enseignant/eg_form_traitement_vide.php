<?php
 include("eg_header.php");
 $titre="TITRE";
?>

  <body>
    <div>
<?php

  $servername = "///";
  $username = "///";
  $password = "///";
  $database = "///";


  $conn = mysqli_connect($servername, $username, $password, $database);
/*on vérifie que c'est bien connecté*/
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br />";

    $VAR=$_POST["VAR"];


<p>"Vous avez saisi les informations suivante : <br>"
    echo $VAR;"<br>"

</p>

    $sql="insert into TABLE (COL, COL, COL) values ($VAR, $VAR, $VAR)";

    if ($mysqli->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement"->$mysqli->error;

  ?>

    <p><a href="NOM_DE_PAGE.php">Retour à la page NOMMÉE</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("eg_footer.php");
?>
