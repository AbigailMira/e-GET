<?php include("../Includes/eg_header.php");

$dateRentree = "";

/* On va chercher la date de la rentrée si elle existe */
$result = $conn->query("SELECT DateD from Semaine where Num_Sem_Sco = 1");

if ($row = $result->fetch_assoc()) {
    /* on l'a récupéré. On met la valeurs dans une variable */
    $dateRentree = $row["DateD"];
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
                <h3>Paramétrer le calendrier </h3>
						<hr>

						<form class="form-horizontal" action="CAL_traitement_aj.php" method="post">
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label class="control-label">Date de la rentrée (AAAA-MM-JJ) : </label>
								</div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="dateRentree" value="<?php echo $dateRentree; ?>" />
								</div>
								</div>
							</div>

							<!--</div>ANNULE-->

						<hr>
						<input type="submit" value="Enregistrer" class="btn btn-success btn-sm"/>&nbsp;
						<input type="submit" value="Annuler" class="btn btn-default btn-sm"/>
            </form>
					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("../Includes/eg_footer.php") ?>
