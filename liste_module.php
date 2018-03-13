<!-- On commence par mettre une variable titre pour le header
     et inclure le header pour commencer la page -->
<?php 
 $titre="Liste des UE"; 
 include("header.php");
?>

<!-- On remet le titre de la page en H1 -->
<h1><?php echo $titre; ?></h1>

<!-- On fait un <ul> pour lister toutes les UE existantes -->
<ul>

<!-- On récupère les UE et on les affiche sous forme de liste,
     avec un lien Editer qui envoie vers la page d'édition -->
<?php
 $query = $conn->query("select * from UE");
 
 while($row = $query->fetch_assoc()) {
  echo "<li>" . $row["Intitule"];
  echo  "<a href='editer_ue.php?Code_UE=" . $row["Code_UE"] . "'>Editer l'UE</a>";
  echo "</li>";
 }
 $query->close();
?>

<!-- Le contenu de la page est fini, on inclut le footer pour
     terminer la page -->
<?php
 include("footer.php");
?>
