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

				<div id="grille" class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
					<section>
						<h3>Ajouter une salle</h3>
						<hr>

						<form action="SALLE_traitement_aj.php" method="post">

							<div class="row form-group eltForm">
								<!--<></>Num-->
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Numéro : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="NumSalle"/>
								</div>
							</div>

								<!--Cap-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Capacité : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="CapSalle"/>
								</div>
							</div>

								<!--Rattachement institutionnel-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Rattachement institutionnel : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="Rattachement"/>
								</div>
							</div>

							<!--Equipement-->
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
