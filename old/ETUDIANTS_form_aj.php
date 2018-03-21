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
				
						<form action="eg_traitement_aj.php" method="post">
							
							<div class="row form-group eltForm">
								<!--Code-->
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Code groupe : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="codeGpe"/>
								</div>
							</div>
							
								<!--Effectif-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Effectif : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="EffGpe"/>
								</div>
							</div>	

							<!--UE-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>U.E. suivie (Code UE) : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									[MENU DEROULANT]
								</div>
							</div>	
						</form>
						</form>
						<hr>
						<input type="submit" value="Enregistrer" class="btn btn-success btn-sm"/>&nbsp;
						<input type="submit" value="Annuler" class="btn btn-default btn-sm"/>
					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("eg_footer.php") ?>