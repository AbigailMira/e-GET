<?php
 include("eg_header.php");
 $titre="Ajouter un diplome";
?>

<h1><?php echo $titre; ?></h1>

		<!-- Section principale : affichage de la grille -->
			<div class="row">
				<div id="colonne" class="col-lg-3">
					<aside>
						<h4>Options</h4>
						<ul id="option">
							<li><span class="glyphicon glyphicon-shopping-cart"></span> Panier</li><br>
							<li><span class="glyphicon glyphicon-bell"></span> Alertes</li><br>
						</ul>
						<br>
					</aside>
				</div>

				<div id="grille" class="col-lg-9">
					<section>
						<h3>Création d'un nouveau diplôme</h3>
						<hr>
						<h4>Informations à remplir :</h4>

						<form action="eg_enregDip.php" method="post">

							<hr>
							<!--retrait de la ligne code enseignant car il s'agit d'un auto-increment dans la base de données
							<label>Code enseignant :</label>&nbsp;&nbsp;<input type="text" name="Code_Enseignant"/><br><br>-->
							<label>Code diplôme :</label>&nbsp;&nbsp;<input type="text" name="CodeDip"/><br><br>
							<label>Nom :</label>&nbsp;&nbsp;<input type="text" name="Nom"/><br><br>
              <label>Année :</label>&nbsp;&nbsp;<input type="text" name="Annee"/><br><br>
							<label>Responsable :</label>&nbsp;&nbsp;<select name="Resp">
								<option value="//">//</option>
								<!--menu deroulant reprenant les enseignants pouvant être responsable de diplôme-->
							</select>
							<hr><br>
							<input type="submit" value="Enregistrer" class="btn btn-success btn-sm"/>&nbsp;<input type="submit" value="Annuler" class="btn btn-default btn-sm"/>
						</form>
					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->

	<?php
	 include("eg_footer.php");
	?>
