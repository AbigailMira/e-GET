<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>///</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../CSS/CSS_GLOBAL.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> <!-- a retenir pour la version de jquery-->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</head>

  <?php

	include ("functions.php");

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

			</div>
		</body>
