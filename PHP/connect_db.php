<?php

// definition des parametre de la connection a la base de donnes

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "eget";
  
$bdd = mysqli_connect($servername, $username, $password, $database);

// si la connection a la base de donnes est reussit 
  if (!$bdd) {
      die("Connection failed: " . mysqli_connect_error());
  }
  //echo '<br /> <p color="blue">Connexion au serveur MySQL établie avec succès.</p> <br />';
  
  /*
   // connexion à la base de données
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', '');
 } catch(Exception $e) {
 exit('Impossible de se connecter à la base de données.');
 }
  */
  
?>