<?php include("../Includes/eg_header.php");

/* Par défaut c'est une création */
$isModif = false;

/* on regarde si on a un CodeDiplome en paramètre. Si oui, c'est pour une modif */
if (isset($_GET["CodeDiplome"])) {
    /* dans ce cas, on le récupère */
    $numSemCiv = $_GET["NumSemCiv"];

    $result = $conn->query("SELECT Num_Sem_civ, Num_Sem_sco, Annee, DateD FROM Semaine WHERE Num_Sem_civ='$numSemCiv'");

    if ($row = $result->fetch_assoc()) {
        /* on l'a récupéré. On met les valeurs dans des variables */
        $numSemCivModif = $row["Num_Sem_civ"];
        $numSemScoModif = $row["Num_Sem_sco"];
        $anneeModif = $row["Annee"];
        $dateDModif = $row["DateD"];

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
                if ($isModif == false) {
                    echo "<h3>Paramétrer le calendrier </h3>";
                } else {
                    echo "<h3>Modifier le paramétrage</h3>";
                }
            ?>
						<hr>

						<form class="form-horizontal" action="CAL_traitement_aj.php" method="post">
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
              <input type="hidden" name="NumSemCiv" value="<?php echo $numSemCivModif; ?>"/>

              <!-- On met aussi un autre champ caché pour dire au php d'enregistrement qu'il
                   s'agit d'une modif -->
              <input type="hidden" name="action" value="modif"/>

              <?php
                      /* Fin du cas création. */
                  }
                  /* Le HTML qui suit sera toujours affiché car on n'est plus dans un bloc php conditionnel */
              ?>


               <div class="row form-group eltForm">
                 <div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
                   <label class="control-label">Semaine civile : </label>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                   <?php
                   afficheselect($conn, "Semaine", "NumSemCiv", "Num_Sem_civ", "Num_Sem_civ", "", "", "");
                    ?>
                 </div>
               </div>

								<!--Nom-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label class="control-label">Semaine scolaire : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <!-- Dans les autres champs on met les valeurs qu'on a potentiellement récupérées
                     dans le cas d'une modif. Dans le cas d'une création, elles seront vides. -->

									<input class="form-control" type="text" name="NumSemSco" value="<?php echo $numSemScoModif; ?>"/>
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
									<label class="control-label">Date (AAAA-MM-JJ) : </label>
								</div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="number" name="DateD" value="<?php echo $dateD; ?>"/>
								</div>
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
