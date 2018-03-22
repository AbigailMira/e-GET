<?php include("../Includes/eg_header.php");
 ?>

	<body>

    <script type="text/javascript">
    function update_UE() {
      var code_diplome=document.getElementById("Code_diplome").value;
      $.get("../Ajax/get_ue_for_diplome.php?code_diplome="+code_diplome, function(data, status){
        document.getElementById("div_select_diplome").innerHTML=data;
      })
    }
    </script>

    <script type="text/javascript">
    function update_Module() {
      var code_UE=document.getElementById("Code_UE").value;
      $.get("../Ajax/get_Module_for_UE.php?code_diplome="+code_ue, function(data, status){
        document.getElementById("div_select_UE").innerHTML=data;
      })
    }
    </script>

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
						<h3>Ajouter une séance</h3>
						<hr>
						<h4>Informations à remplir :</h4>
						<hr>
						<form action="eg_traitement_aj.php" method="post">
							<!--<div class="row" id="formulaire">    ANNULE-->

							<div class="row form-group eltForm">
								<!--<></>Code-     modifs sur le input type cf BDD-->
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Diplôme : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Diplome", "Code_diplome", "Code_diplome", "Nom_diplome", "",
                  "onchange='update_UE()'");
                   ?>
								</div>
							</div>

								<!--Nom-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>UE : </label>
								</div>
								<div id="div_select_diplome" class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
                Sélectionnez un diplôme
								</div>
							</div>

								<!--Année     modifs sur le input type cf BDD-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Module : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Module", "idModule", "idModule", "Descriptif");
                   ?>
								</div>
							</div>

								<!--Responsable fonction afficheselect-->
							<div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Enseignant : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Enseignant", "idEnseignant", "idEnseignant", "CONCAT (Nom,' ',Prenom)");
                   ?>
								</div>
							</div>

              <div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Groupe étudiant : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Gr_etudiants", "Gr_etudiants", "Code_groupe", "Code_groupe");
                   ?>
								</div>
							</div>

              <div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Salle : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Salle", "Num_salle", "Num_salle", "Num_salle");
                   ?>
								</div>
							</div>

              <div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Heure de début : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Creneau_horaire", "Creneau_debut", "Num_creneau", "Libelle_c");
                   ?>
								</div>
							</div>

              <div class="row form-group eltForm">
								<div class = "col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Heure de fin : </label>
								</div>
								<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Creneau_horaire", "Creneau_fin", "Num_creneau", "Libelle_c");
                   ?>
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
