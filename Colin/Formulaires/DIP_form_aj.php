<?php include("../Includes/eg_header.php");

/* Par défaut c'est une création */
$isModif = false;

/* on regarde si on a un CodeDiplome en paramètre. Si oui, c'est pour une modif */
if (isset($_GET["CodeDiplome"]) {
    /* dans ce cas, on le récupère */
    $codeDiplome = $_GET["CodeDiplome"];

    $result = $conn->query("SELECT CodeDiplome, NomDiplome, Annee, Enseignant_idEnseignant FROM Diplome WHERE CodeDiplome='$codeDiplome'");

    if ($row = $result->fetch_assoc()) {
        /* on l'a récupéré. On met les valeurs dans des variables */
        $codeDiplomeModif = $row["CodeDiplome"];
        $nomDiplomeModif = $row["NomDiplome"];
        $anneeModif = $row["Annee"];
        $idEnseignantModif = $row["Enseignant_idEnseignant"];

        /* et on note que c'est une modif */
        $isModif = true;
    }

    /* on ferme le resultset */
    $result->close();
}
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
            <?php
                /* on met le titre en fonction de création ou modification */
                if ($isModif == true) {
                    echo "<h3>Ajouter un diplôme</h3>";
                } else {
                    echo "<h3>Modifier le diplôme $codeDiplomeModif</h3>";
                }
            ?>
						<hr>

						<form class="form-horizontal" action="eg_traitement_aj.php" method="post">
							<!--<div class="row" id="formulaire">    ANNULE-->

              <?php
                  /* si c'est une modification, on n'affiche pas le champ CodeDiplome qui est la clé primaire.
                   * à la place, on le met en caché (pour que le formulaire de traitement le reçoive quand même)
                   */
                  if ($isModif == true) {
                      /* ici on ferme le bloc php avec ?>, au beau milieu du if. Le code HTML qui suit jusqu'au
                       * prochain bloc PHP sera affiché si $isModif est à true. Cela permet de ne pas se
                       * dégueulasser le code avec douze mille echo "" de HTML.
                       */
              ?>

              <!-- Ici on est dans le HTML affiché si $isModif == true -->
              <!-- On met le champ CodeDiplome en caché, avec en value, la valeur de la variable
                   récupérée dans la requête au début de la page -->
              <input type="hidden" name="CodeDiplome" value="<?php echo $codeDiplomeModif; ?>"/>

              <!-- On met aussi un autre champ caché pour dire au php d'enregistrement qu'il
                   s'agit d'une modif -->
              <input type="hidden" name="action" value="modif"/>

              <?php
                      /* Fin du cas modif. On met le else et on entre dans le cas création */
                  } else {
                      /* Pareil que plus haut, le code HTML suivant et jusqu'à la clôture du else
                       * dans le prochain bloc PHP sera affiché si $isModif == false.
                       */
              ?>

							<div class="row form-group eltForm">
								<!--<></>Code-->
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label class="control-label">Code diplôme : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="CodeDiplome"/>
                  <!-- Dans le cas création aussi, on met le champ caché "action" pour dire au
                       php d'enregistrement que c'est une création -->
                  <input type="hidden" name="action" value="creation"/>
								</div>
							</div>

              <?php
                      /* Fin du cas création. */
                  }
                  /* Le HTML qui suit sera toujours affiché car on n'est plus dans un bloc php conditionnel */
              ?>

								<!--Nom-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label class="control-label">Nom diplôme : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <!-- Dans les autres champs on met les valeurs qu'on a potentiellement récupérées
                     dans le cas d'une modif. Dans le cas d'une création, elles seront vides. -->

									<input class="form-control" type="text" name="NomDiplome" value="<?php echo $nomDiplomeModif; ?>"/>
								</div>
							</div>

								<!--Année-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label class="control-label">Année : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="number" name="Annee" value="<?php echo $anneeModif; ?>"/>
								</div>
							</div>

								<!--Responsable-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label class="control-label">Responsable : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <?php

                  /* Pour le menu déroulant (select), resélectionner l'option existante est plus complexe
                   * dans le cas de l'édition : il faut passer la valeur actuelle à la fonction afficheselect
                   * pour qu'elle puisse l'utiliser.
                   * On ajoute donc un troisième paramètre optionnel à la fonction, et on renseigne les
                   * deux paramètres optionnels précédent avec leur valeur par défaut, "".
                   * La fonction afficheselect() évolue pour gérer ce cas.
                   */
                  afficheselect($conn, "Enseignant", "idEnseignant", "idEnseignant", "CONCAT (Nom,' ',Prenom)", "", "", $idEnseignantModif);
                   ?>
								</div>
							</div>

							<!--</div>ANNULE-->

						<hr>
						<input type="submit" value="Enregistrer" class="btn btn-success btn-sm"/>&nbsp;
						<input type="submit" value="Annuler" class="btn btn-default btn-sm"/>
            </form>
					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("../Includes/eg_footer.php") ?>
