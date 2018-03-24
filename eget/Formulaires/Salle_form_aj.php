<?php include("../Includes/eg_header.php");
/* Par défaut c'est une création */
$isModif = false;

/* on regarde si on a un NumSalle en paramètre. Si oui, c'est pour une modif */
if (isset($_GET["NumSalle"])) {
    /* dans ce cas, on le récupère */
    $numSalle = $_GET["NumSalle"];

    $result = $conn->query("SELECT Capacite, Rattachement FROM Salle WHERE NumSalle='$numSalle'");

    if ($row = $result->fetch_assoc()) {
        /* on l'a récupéré. On met les valeurs dans des variables */
        $capaciteModif = $row["Capacite"];
        $rattachementModif = $row["Rattachement"];

        /* et on note que c'est une modif */
        $isModif = true;
    }

    /* on ferme le resultset */
    $result->close();
}
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

				<div id="grille" class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
					<section>
            <?php
                /* on met le titre en fonction de création ou modification */
                if ($isModif == false) {
                    echo "<h3>Ajouter une salle</h3>";
                } else {
                    echo "<h3>Modifier la salle $numSalle</h3>";
                }
            ?>
						<hr>

						<form action="SALLE_traitement_aj.php" method="post">

							<div class="row form-group eltForm">
								<!--<></>Num-->

								<?php
										if ($isModif == true) {
								?>
								<input type="hidden" name="NumSalle" value="<?php echo $numSalle; ?>"/>
								<input type="hidden" name="action" value="modif"/>

								<?php
									} else {
								?>

								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Numéro : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="NumSalle"/>
                  <input type="hidden" name="action" value="creation"/>
								</div>
							</div>

							<?php
								}
							?>

								<!--Cap-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Capacité : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="CapSalle" value="<?php echo $capaciteModif; ?>"/>
								</div>
							</div>

								<!--Rattachement institutionnel-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Rattachement institutionnel : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="Rattachement" value="<?php echo $rattachementModif; ?>"/>
								</div>
							</div>

							<!--Equipement-->
							<!-- TODO: multi-select:
									 dans le cas modification pour retrouver les équipements sélectionnés:
									 select Equipement.idEquipement
											from Dispose_de join Equipement
												on Equipement.idEquipement = Dispose_de.Equipement_idEquipement
											where Dispose_de.Salle_num_salle = $numSalle

									 puis adapter la fonction afficheselect pour être capable de faire un <select multiple>
									 et de précocher les valeurs spécifiées
							  -->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Equipement : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Equipement", "idEquipement", "idEquipement", "Libelle_e");
                   ?>
								</div>
                <hr>
    						<input type="submit" value="Enregistrer" class="btn btn-success btn-sm"/>&nbsp;
    						<input type="submit" value="Annuler" class="btn btn-default btn-sm"/>
							</div>
						</form>

					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("../Includes/eg_footer.php") ?>
