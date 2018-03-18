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
						<h3>Ajouter un enseignant</h3>
						<hr>
						<h4>Informations à remplir :</h4>
						<hr>
						<form action="eg_traitement_aj.php" method="post">
							<div class="row" id="formulaire">
								<div id="etqt" class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
									<label>Code enseignant :</label><br><br>
									<label>Nom :</label><br><br>
									<label>Prénom :</label><br><br>
									<label>Statut :</label><br><br>
								</div>
								<div id="inprout" class="col-lg-10 col-md-9 col-sm-4 col-xs-4">
									<input type="text" name="Code_Enseignant"/><br><br>
									<input type="text" name="Nom"/><br><br>
									<input type="text" name="Prenom"/><br><br>
									<select name="Statut">
										<option>Chargé de cours</option>
										<option>Maître de conférence</option>
										<option>Autre</option>
									</select><br>
								</div>
							</div>
						</form>
						<hr>
						<input type="submit" value="Enregistrer" class="btn btn-success btn-sm"/>&nbsp;<input type="submit" value="Annuler" class="btn btn-default btn-sm"/><br><br>
					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("eg_footer.php") ?>
