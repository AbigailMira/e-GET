<?php
 
/* VALUES */
$id=$_POST['id'];
$start=$_POST['start'];
$end=$_POST['end'];
 
// connexion à la base de données
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=eget', 'root', '');
 } catch(Exception $e) {
 exit('Impossible de se connecter à la base de données.');
 }
 
$sql = "UPDATE seance SET  debut=?, fin=? WHERE idSeance=?";
$q = $bdd->prepare($sql);
$q->execute(array($start,$end,$id));
 
?>