<?php include("../Includes/eg_header.php");
 ?>

	<body>
		<div class="container-fluid">

		<!-- Menu du haut -->
			<?php
			include("../Includes/eg_menu.php");
			?>
		<!-- Section principale : affichage de la grille -->
			<?php
			include("../Includes/eg_asidenav.php")
			 ?>

  <body>
    <div>
<?php

$var=$_POST["Variable"];
$var=$_POST["Variable"];
$var=$_POST["Variable"];

echo "<p>Vous avez saisi les informations suivante : <br>";
echo $var."<br>";
echo $var."<br>";
echo $var."<br>";
echo "</p>";

    $sql="insert into TABLE (COL, COL, COL) values ($VAR, $VAR, $VAR)";

    if ($conn->query($sql) === true){
      echo "Enregistrement réussi";
    }
    else {
      echo "Erreur d'enregistrement"->$conn->error;

  ?>

    <p><a href="NOM_DE_PAGE.php">Retour à la page NOMMÉE</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("eg_footer.php");
?>
