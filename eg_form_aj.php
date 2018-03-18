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
						<h3>Ajouter un diplôme</h3>
						<hr>
						<h4>Informations à remplir :</h4>
						<hr>
						<form action="eg_traitement_aj.php" method="post">
							<div class="row" id="formulaire">
								<div id="etqt" class="col-lg-2 col-md-2 col-sm-6 col-sm-offset-1 col-xs-6 col-xs-offset-1">
									<label>Code diplôme : </label><br><br>
									<label>Nom diplôme : </label><br><br>
									<label>Année : </label><br><br>
									<label>Responsable</label><br><br>
								</div>
								<div id="inprout" class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-6 col-xs-offset-1">
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