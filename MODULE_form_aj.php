<?php include("../Includes/eg_header.php");
$isModif = false;

/* on regarde si on a un idModule en paramètre. Si oui, c'est pour une modif */
if (isset($_GET["idModule"])) {
    /* dans ce cas, on le récupère */
    $idModule = $_GET["idModule"];

    $result = $conn->query("SELECT Intitule, Descriptif, Quota_heures, EQTD FROM Module WHERE idModule='$idModule'");

    if ($row = $result->fetch_assoc()) {
        /* on l'a récupéré. On met les valeurs dans des variables */
        $intituleModif = $row["Intitule"];
        $descriptifModif = $row["Descriptif"];
        $quotaHeuresModif = $row["Quota_heures"];
        $EQTDModif = $row["EQTD"];

        /* et on note que c'est une modif */
        $isModif = true;
    }

    /* on ferme le resultset */
    $result->close();

		/* On va chercher les caractéristiques du module par UE */
    $result = $conn->query("SELECT Coefficient, UE_Code_UE from Determination_caract WHERE Module_idModule='$idModule'");

		/* TODO un module peut être dans plusieurs UE */
    if ($row = $result->fetch_assoc()) {
        $coefficientModif = $row["Coefficient"];
        $codeUEModif = $row["UE_Code_UE"];
    }
    $result->close();

		/* On va chercher les équipements nécessaires */
    $result = $conn->query("SELECT Equipement_idEquipement from Requiert WHERE Module_idModule='$idModule'");

		$idEquipementsModif = array();
    if ($row = $result->fetch_assoc()) {
				/* on met chaque équipement dans un array */
        array_push($idEquipementsModif, $row["Equipement_idEquipement"]);
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
                    echo "<h3>Ajouter un module</h3>";
                } else {
                    echo "<h3>Modifier le module $intituleModif</h3>";
                }
            ?>
						<hr>

						<form action="MODULE_traitement_aj.php" method="post">
							<!--<div class="row" id="formulaire">    ANNULE-->

              <?php
                  if ($isModif == true) {
              ?>

              <!-- Ici on est dans le HTML affiché si $isModif == true -->
              <!-- On met le champ CodeDiplome en caché, avec en value, la valeur de la variable
                   récupérée dans la requête au début de la page -->
              <input type="hidden" name="idModule" value="<?php echo $idModule; ?>"/>

              <!-- On met aussi un autre champ caché pour dire au php d'enregistrement qu'il
                   s'agit d'une modif -->
              <input type="hidden" name="action" value="modif"/>

              <?php
                  } else {
              ?>

							<div class="row form-group eltForm">
								<!--<></>Code-->
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Code module : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="idModule"/>
								</div>
							</div>

							<?php
								}
							?>

								<!--intitulé-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Intitulé : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="Intitule" value="<?php echo $intituleModule; ?>"/>
								</div>
							</div>

								<!--Descriptif-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Descriptif : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<textarea class="form-control" rows = "6" type="text" name="Descriptif"><?php echo $descriptifModule; ?></textarea>
								</div>
							</div>

								<!--Heures-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Nombre d'heures : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="Quota_heures" value="<?php echo $quotaHeuresModif; ?>"/>
								</div>
							</div>

								<!--EQTD-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>EQTD : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="text" name="EQTD" value="<?php echo $EQTDModif; ?>"/>
								</div>
							</div>

							<!-- TODO: pouvoir gérer plusieurs couples UE/Coeff -->

							<!--Ue-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>UE de rattachment : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<?php
										afficheselect($conn, "UE", "Code_UE", "Code_UE", "Intitule", "", "", $codeUEModif);
									?>
								</div>
							</div>

								<!--Coeff-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Coefficient : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<input class="form-control" type="number" name="Coefficient" value="<?php echo $coefficientModif; ?>"/>
								</div>
							</div>

							<!--Equipement-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Equipement requis : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
									<?php
                  afficheselect($conn, "Equipement", "idEquipement[]", "idEquipement", "Libelle_e", "", "", $idEquipementsModif, true);
									?>
								</div>
							</div>

							<!--</div>ANNULE-->
						</form>
						<hr>
						<input type="submit" value="Enregistrer" class="btn btn-success btn-sm"/>&nbsp;
						<input type="submit" value="Annuler" class="btn btn-default btn-sm"/>
					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("../Includes/eg_footer.php") ?>
