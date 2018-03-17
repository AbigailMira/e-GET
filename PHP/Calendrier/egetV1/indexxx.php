<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>e-Get - Aceuille</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="./Style/e-Get_style-enseignant.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> <!-- a retenir pour la version de jquery-->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
		
		
	</head>
	
	<body>
		<div class="container-fluid">
		<!-- Bandeau identification : logo + personne connectée -->
			<div id="header" class="row">
				<h1>e-Get</h1>
				<p>Bienvenue +identifiant+</p>
			</div>
		
		<!-- Menu du haut -->
		<?php include('menu.html'); ?> 

		
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
						<form>
							<hr>
							<label>Code enseignant :</label>&nbsp;&nbsp;<input type="text" name="Code_Enseignant"/><br><br>
							<label>Nom :</label>&nbsp;&nbsp;<input type="text" name="Nom"/><br><br>
							<label>Prénom :</label>&nbsp;&nbsp;<input type="text" name="Prenom"/><br><br>
							<label>Statut :</label>&nbsp;&nbsp;<select name="Statut">
								<option>Chargé de cours</option>
								<option>Maître de conférence</option>
								<option>Autre</option>
							</select>
							<hr><br>
							<input type="submit" value="Enregistrer" class="btn btn-success btn-sm"/>&nbsp;<input type="submit" value="Annuler" class="btn btn-default btn-sm"/>
						</form>
					</section>
				</div>
			</div>
			
		<!-- Footer : mentions légales et crédits -->
			<footer class="navbar-fixed-bottom">
				<div id="footer" class="row">
					<p><a href="#">Crédits</a> | <a href="#">Mentions Légales</a></p>
				</div>
			</footer>
		</div>
	</body>
</html>