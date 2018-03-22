<?php
 include("../Includes/eg_header.php");
 $titre="Enregistrement enseignant";

include("../Includes/eg_menu.php");

include("../Includes/eg_asidenav.php")
?>

  <body>
    <div>
<?php
print_r($_POST);
    $dateRentree = $_POST["dateRentree"];

    /* On efface toutes les semaines */
      $sql = "delete from Semaine";
      if ($conn->query($sql) === true){
        echo "Enregistrement réussi";
      }
      else {
        echo "Erreur d'enregistrement".$conn->error;
    }

    /*On les réinsère pour l'année en cours */
    
    $annee = substr($dateRentree, 0, 4);
    
    /* On trouve le numéro de semaine civile pour la semaine de la rentrée, avec le format W (week) de DateTime */
    $datetimeRentree = new DateTime($dateRentree);
    $numSemCivRentree = $datetimeRentree->format("W") - 2;

    for ($i = 1; $i < 52; $i++) {
        /* numéro semaine scolaire */
        $numSemSco = $i;
        /* numéro semaine civile : c'est le numéro de semaine civile de rentrée
         * plus le numéro de semaine scolaire en cours,
         * modulo 52 (car en janvier on revient à 1),
         * plus 1 car on compte de 1 dans le civil.
         */
        $numSemCiv = ($numSemCivRentree + $numSemSco) % 52 + 1;
        
        $sql = "insert into Semaine (Num_Sem_civ, Num_Sem_sco, Annee, DateD) 
              values ($numSemCiv, $numSemSco, $annee, adddate('$dateRentree', ($numSemSco-1)*7))";
              
        if ($conn->query($sql) === true){
          echo "Enregistrement réussi";
        }
        else {
          echo "Erreur d'enregistrement".$conn->error;
        }
    }
    
  ?>

    <p><a href="CAL_form_aj.php">Retour</a>
  </div>

<!-- Footer : mentions légales et crédits -->

<?php
include("../Includes/eg_footer.php");
?>
