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
						<h3>Accueil Salles</h3>
                        <hr>
                        <div>
                            <form class = "form-inline row" action="/action_page.php"><!-- traitement de la recherche -->
								<div class="form-group lsearch">
									<div>
										<label for="search"><h4>Chercher une salle : </h4></label>
									</div>
								</div>
								<div class="form-group search">	
									<div>
										<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Chercher une salle ..." title="Type in a salle">
										<button type="submit"><i class="fa fa-search"></i></button>
									</div>
									
								</div>
                            </form>
                        </div>
                        
						
						<div class="table-responsive">  
							<table class = "table table-striped" id="myTable">
								<tr class="header">
									<th></th>
									<th>Numéro</th>
									<th>Capacité</th>
									<th>Rattachement</th>
									<th>Equipement</th>
								</tr>
								
								<tr>
									<td>
										<label><input type="radio"></label>
									</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								
								<tr>
									<td>
										<label><input type="radio"></label>
									</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								
								<tr>
									<td>
										<label><input type="radio"></label>
									</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								
								<tr>
								   <td>
										<label><input type="radio"></label>
									</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								
								<tr>
									<td>
										<label><input type="radio"></label>
									</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								
								<tr>
									<td>
										<label><input type="radio"></label>
									</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								
								<tr>
									<td>
										<label><input type="radio"></label>
									</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								
								<tr>
									<td>
										<label><input type="radio"></label>
									</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								
							</table>
						</div>
						
						<hr>
						
						<div class="row">
							<div class = "col-lg-4  col-md-4 col-sm-5  col-xs-5">
								<input type="submit" value="Modifier" class="btn btn-primary btn-md"/>&nbsp;
								<input type="submit" value="Supprimer " class="btn btn-primary btn-md"/>
							</div>
							
							<div class = "col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-2 col-sm-offset-2 col-xs-2 col-xs-offset-2">
								<input type="submit" value="Ajouter" class="btn btn-success btn-md"/>
							</div>
						</div>
					</section>
				</div>
			</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("eg_footer.php") ?>