<?php
 include("eg_header.php");
 $titre="TITRE";
?>

  <body>
    <div>
<?php
      <div>
        include("../../Includes/eg_menu.php");
      </div>


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
