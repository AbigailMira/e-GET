<?php
 include("../../Includes/eg_header.php");
 $titre="TITRE";
?>

<h1><?php echo $titre; ?></h1>

		<!-- Section principale : affichage de la grille -->
			<?php
        include("../../Includes/eg_menu.php");
      ?>

				<div id="grille" class="col-lg-9">
					<section>
						<h3>CE QUE FAIT CE FORMULAIRE</h3>
						<hr>
						<h4>Informations à remplir :</h4>

						<form action="///.php" method="post">

							<hr>
							<!--retrait de la ligne code enseignant car il s'agit d'un auto-increment dans la base de données
							<label>Code enseignant :</label>&nbsp;&nbsp;<input type="text" name="Code_Enseignant"/><br><br>-->
							<label>CHAMP 1 TXT :</label>&nbsp;&nbsp;<input type="text" name="///"/><br><br>
							<label>CHAMP 2 TXT :</label>&nbsp;&nbsp;<input type="text" name="///"/><br><br>
							<label>CHAMPS 3 MENU DEROULANT :</label>&nbsp;&nbsp;<select name="///">
								<option value="///">CHOIX 1</option>
								<option value="///">CHOIX 2</option>
								<option value="///">CHOIX 3</option>
								<option value="///">CHOIX 4</option>
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
