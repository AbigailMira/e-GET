<?php
 include("eg_header.php");
 $titre="Ajouter un enseignant";
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
						<h3>Création d'un nouvel enseignant</h3>
						<hr>
						<h4>Informations à remplir :</h4>

						<form action="eg_enregEns.php" method="post">

							<hr>
							<!--retrait de la ligne code enseignant car il s'agit d'un auto-increment dans la base de données
							<label>Code enseignant :</label>&nbsp;&nbsp;<input type="text" name="Code_Enseignant"/><br><br>-->
							<label>Nom :</label>&nbsp;&nbsp;<input type="text" name="Nom"/><br><br>
							<label>Prénom :</label>&nbsp;&nbsp;<input type="text" name="Prenom"/><br><br>
							<label>Statut :</label>&nbsp;&nbsp;<select name="Statut">
								<option value="CC">Chargé de cours</option>
								<option value="MCF">Maître de conférence</option>
								<option value="PR">Professeur des Universités</option>
								<option value="Autre">Autre</option>
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
