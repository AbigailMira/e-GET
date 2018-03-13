<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>///</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="e-Get_style-enseignant.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> <!-- a retenir pour la version de jquery-->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</head>

  <?php

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "eget";


	$conn = mysqli_connect($servername, $username, $password, $database);

 /*on vérifie que c'est bien connecté*/
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully<br />";
	?>

	<body>
		<div class="container-fluid">
		<!-- Bandeau identification : logo + personne connectée -->
			<div id="header" class="row">
				<h1>e-Get</h1>
				<p>Bienvenue +identifiant+</p>
			</div>

		<!-- Menu du haut -->
			<div class = "row" id = "part1">
				<div id="menu" class = "col-lg-12 col-md-12 col-sm-12">
					<ul class="nav nav-tabs">
						<li><a data-toggle="tab" href="#menu0"><span class="glyphicon glyphicon-menu-hamburger"></span> Fichier</a></li>
						<li><a data-toggle="tab" href="#menu1"><span class="glyphicon glyphicon-pencil"></span> Créer</a></li>
						<li><a data-toggle="tab" href="#menu2"><span class="glyphicon glyphicon-edit"></span> Modifier</a></li>
						<li><a data-toggle="tab" href="#menu3"><span class="glyphicon glyphicon-cog"></span> Gérer</a></li>
						<li><a data-toggle="tab" href="#menu4"><span class="glyphicon glyphicon-book"></span> Aide</a></li>
					</ul>

					<div class="tab-content">
						<div id="menu0" class="tab-pane fade">
							<nav class="navbar navbar-inverse">
								<ul class="nav navbar-nav">
									<li><a href="#">Dupliquer</a></li>
									<li><a href="#">Exporter</a></li>
									<li><a href="#">Imprimer</a></li>
								</ul>
							</nav>
						</div>

						<div id="menu1" class="tab-pane fade">
							<nav class="navbar navbar-inverse">
								<ul class="nav navbar-nav">
									<li><a href="#">Nouveau créneau</a></li>
									<li><a href="#">Nouvel évènement</a></li>
									<li><a href="#">Alerte</a></li>
								</ul>
							</nav>
						</div>

						<div id="menu2" class="tab-pane fade">
							<nav class="navbar navbar-inverse">
								<ul class="nav navbar-nav">
									<li><a href="#">Créneau</a></li>
									<li><a href="#">Affichage</a></li>
									<li><a href="#">Thème</a></li>
								</ul>
							</nav>
						</div>

						<div id="menu3" class="tab-pane fade">
							<nav class="navbar navbar-inverse">
								<ul class="nav navbar-nav">
									<li><a href="#">Enseignants</a></li>
									<li><a href="#">Promotions</a></li>
									<li><a href="#">U.E.</a></li>
									<li><a href="#">Salle</a></li>
								</ul>
							</nav>
						</div>

						<div id="menu4" class="tab-pane fade">
							<nav class="navbar navbar-inverse">
								<ul class="nav navbar-nav">
									<li><a href="#">Consulter la documentation</a></li>
									<li><a href="#">En ligne</a></li>
								</ul>
							</nav>
						</div>
					</div>

				</div>
			</div>
		</body>
