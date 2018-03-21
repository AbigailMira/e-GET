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
							<!--<div class="row" id="formulaire">    ANNULE-->

							<div class="row form-group eltForm">
								<!--<></>Code-     modifs sur le input type cf BDD-->
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Code diplôme : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="number" name="CodeDiplome"/>
								</div>
							</div>

								<!--Nom-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Nom diplôme : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="NomDiplome"/>
								</div>
							</div>

								<!--Année     modifs sur le input type cf BDD-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Année : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="number" name="AnnDiplome"/>
								</div>
							</div>

								<!--Responsable fonction afficheselect-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Responsable : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Enseignant", "idEnseignant", "idEnseignant", "CONCAT (Nom,' ',Prenom)");
                   ?>
								</div>
							</div>
              <hr>
              <input type="submit" value="Ajouter" class="btn btn-success btn-sm"/>&nbsp;
              <input type="submit" value="Annuler" class="btn btn-default btn-sm"/><br><br>
							<!--</div>ANNULE-->
						</form>

					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("eg_footer.php") ?>
