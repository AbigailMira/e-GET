<?php

// Connexion à la base de données
require_once('connect_db.php');


echo $_POST['Code_diplome'];
	echo  $_POST['idModule'];
	echo  $_POST['idEnseignant'];
	//echo  $_POST['Code_groupe']; && isset($_POST['Code_groupe']),Gr_etudiants_Code_groupe ,'$groupe'
	echo $_POST['Num_salle'];
	echo  $_POST['start'];
	echo  $_POST['end'];
if (isset($_POST['Code_diplome']) && isset($_POST['idModule']) && isset($_POST['idEnseignant'])  && isset($_POST['Num_salle']) && isset($_POST['start']) && isset($_POST['end'])){
	echo("ok");
	$diplome = $_POST['Code_diplome'];
	$module = $_POST['idModule'];
	$Enseignant = $_POST['idEnseignant'];
	//$groupe = $_POST['Code_groupe'];
	$sale = $_POST['Num_salle'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	//$color = $_POST['color'];
	
	
	$sql = "INSERT INTO seance(Salle_Num_salle, Module_idModule, Enseignant_idEnseignant, debut, fin) VALUES ('$sale','$module','$Enseignant','$start','$end')";
	
	
echo($sql);
	//$sql = "INSERT INTO seance(title, start, end, color) values ('$title', '$start', '$end', '$color')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
