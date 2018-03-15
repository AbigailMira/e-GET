<!-- Début de la page, on mutualise le début du HTML, la connexion
     à la base et le header/menu (pas codé dans l'exemple) -->
<html>
 <head>
  <title><?php echo $titre; ?></title>
 </head>

 <?php

 $servername = "localhost";
 $username = "root";
 $password = "root";
 $database = "eGet";


 $conn = mysqli_connect($servername, $username, $password, $database);

/*on vérifie que c'est bien connecté*/
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully<br />";
 ?>

 <body>
