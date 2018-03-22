<?php include("../Includes/eg_header.php");

/* Par défaut c'est une création */
$isModif = false;

/* init des variables, pour la création */
$codeGroupeModif="";
$effectifModif="";
$UEs = array();

/* on regarde si on a un CodeDiplome en paramètre. Si oui, c'est pour une modif */
if (isset($_GET["Code_groupe"])) {
    /* dans ce cas, on le récupère */
    $codeGroupe = $_GET["Code_groupe"];

    $result = $conn->query("SELECT Code_groupe, Effectif FROM Gr_etudiants WHERE Code_groupe='$codeGroupe'");

    if ($row = $result->fetch_assoc()) {
        /* on l'a récupéré. On met les valeurs dans des variables */
        $codeGroupeModif = $row["Code_groupe"];
        $effectifModif = $row["Effectif"];

        /* et on note que c'est une modif */
        $isModif = true;
    }

    /* on ferme le resultset */
    $result->close();

		/* On va chercher les UEs du groupe */
    $result = $conn->query("SELECT UE_Code_UE from Composition WHERE Gr_etudiants_Code_groupe='$codeGroupe'");

    while ($row = $result->fetch_assoc()) {
				/* on met chaque ue dans un array */
        array_push($UEs, $row["UE_Code_UE"]);
    }
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
                    echo "<h3>Ajouter un Groupe d'étudiants </h3>";
                } else {
                    echo "<h3>Modifier le groupe $codeGroupeModif </h3>";
                }
            ?>
						<hr>

						<form class="form-horizontal" action="ETU_traitement_aj.php" method="post">
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
              <input type="hidden" name="Code_groupe" value="<?php echo $codeGroupe; ?>"/>

              <!-- On met aussi un autre champ caché pour dire au php d'enregistrement qu'il
                   s'agit d'une modif -->
              <input type="hidden" name="action" value="modif"/>

              <?php
                 } else {
              ?>

              <div class="row form-group eltForm">
                <div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
                  <label class="control-label">Code groupe : </label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <!-- Dans les autres champs on met les valeurs qu'on a potentiellement récupérées
                     dans le cas d'une modif. Dans le cas d'une création, elles seront vides. -->

                  <input class="form-control" type="text" name="Code_groupe" value="<?php echo $codeGroupeModif; ?>"/>
                  <input type="hidden" name="action" value="creation"/>
                </div>
              </div>
              <?php
                }
              ?>
								<!--Nom-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label class="control-label">Effectif : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <!-- Dans les autres champs on met les valeurs qu'on a potentiellement récupérées
                     dans le cas d'une modif. Dans le cas d'une création, elles seront vides. -->

									<input class="form-control" type="number" name="Effectif" value="<?php echo $effectifModif; ?>"/>
								</div>
							</div>


              <div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label class="control-label">UE suivies : </label>
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
                  afficheselect($conn, "UE", "Code_UE[]", "Code_UE", "CONCAT (Intitule,' ',Descriptif)", "", "", $UEs, true);
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
