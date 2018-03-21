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
						<h3>Ajouter une unité d'enseignement</h3>
						<hr>
						<h4>Informations à remplir :</h4>
						<hr>
						<form action="eg_traitement_aj.php" method="post">
							<!--<div class="row" id="formulaire">    ANNULE-->

							<div class="row form-group eltForm">
								<!--<></>Code-->
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Code U.E. : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="CodeUE"/>
								</div>
							</div>

								<!--intitulé-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Intitulé : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="NomUE"/>
								</div>
							</div>

								<!--Descriptif-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Descriptif : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<textarea class="form-control" rows = "6" type="text" name="DescUE"></textarea>
								</div>
							</div>

								<!--Diplome-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Diplôme : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<!-- <input class="form-control" type="text" name="ectsUE"/> -->
                  <!-- fonction afficheselect-->
                  <?php
                  afficheselect($conn, "Diplome", "code_diplome", "Code_Diplome", "Nom_diplome");
                   ?>
								</div>
							</div>

								<!--ECTS     modifs sur le input type cf BDD et input name-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>ECTS : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="number" name="ectsUE"/>
								</div>
							</div>

							<!--</div>ANNULE-->
						</form>
						<hr>
						<input type="submit" value="Ajouter" class="btn btn-success btn-sm"/>&nbsp;
						<input type="submit" value="Annuler" class="btn btn-default btn-sm"/><br><br>
					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("eg_footer.php") ?>
