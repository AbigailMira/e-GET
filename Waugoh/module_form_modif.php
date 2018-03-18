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
						<h3>Modifier un module</h3>
						<hr>
						<h4>Informations à remplir :</h4>
						<hr>
						<form action="eg_traitement_aj.php" method="post">
							<div class="row form-group eltForm">
								<!--<></>Code-->
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Code module : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="CodeModule"/>
								</div>
							</div>

								<!--intitulé-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Intitulé : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="NomModule"/>
								</div>
							</div>

								<!--Descriptif-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Descriptif : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<textarea class="form-control" rows = "6" type="text" name="DescModule"></textarea>
								</div>
							</div>

								<!--EQTD     modifs sur le input type cf BDD-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Nombre d'heures : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="number" name="heureModule"/>
								</div>
							</div>

								<!--Coefficient     modifs sur le input type cf BDD-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Coefficient : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="number" name="CoefModule">
								</div>
							</div>

								<!--Equipement requis-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Equipement requis : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
									<label>
										<input type="checkbox" name="Equip 1"> Equipement 1<br>
										<input type="checkbox" name="Equip 2"> Equipement 2<br>
										<input type="checkbox" name="Equip 3"> Equipement 3<br>
									</label>
								</div>
							</div>
						</form>
						<hr>
						<input type="submit" value="Modifier" class="btn btn-success btn-sm"/>&nbsp;
						<input type="submit" value="Annuler" class="btn btn-default btn-sm"/><br><br>
					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("eg_footer.php") ?>
