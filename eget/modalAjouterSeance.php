		<!-- Modal ajouter seance -->
		<?php
			include("Includes/functions.php");
			?>
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="AjouterSeance.php">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">ajouter seance</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="row form-group eltForm">
								<!--<></>Code-     modifs sur le input type cf BDD-->
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Diplôme : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Diplome", "Code_diplome", "Code_diplome", "Nom_diplome", "",
                  "onchange='update_UE()'");
                   ?>
								</div>
							</div>

								<!--Nom-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>UE : </label>
								</div>
								<div id="div_select_diplome" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                Sélectionnez un diplôme
								</div>
							</div>

								<!--Année     modifs sur le input type cf BDD-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Module : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Module", "idModule", "idModule", "Descriptif");
                   ?>
								</div>
							</div>

								<!--Responsable fonction afficheselect-->
							<div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Enseignant : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Enseignant", "idEnseignant", "idEnseignant", "CONCAT (Nom,' ',Prenom)");
                   ?>
								</div>
							</div>

              <div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Groupe étudiant : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Gr_etudiants", "Gr_etudiants", "Code_groupe", "Code_groupe");
                   ?>
								</div>
							</div>

              <div class="row form-group eltForm">
								<div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6  col-xs-6  eltG">
									<label>Salle : </label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 eltR">
                  <?php
                  afficheselect($conn, "Salle", "Num_salle", "Num_salle", "Num_salle");
                   ?>
								</div>
							</div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Date debut</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Date fin</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" readonly>
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				<button type="submit" class="btn btn-primary">Sauvgarder</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>