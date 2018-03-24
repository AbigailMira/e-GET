<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "eget";


$conn = mysqli_connect($servername, $username, $password, $database);

/*on vérifie que c'est bien connecté*/
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
/* afficheselect: affiche un <select> avec des <options> suivant les paramètres passés
 * $conn:         connexion à la base de données
 * $nom_table:    nom de la table où récupérer les entités
 * $value_col:    nom de la colonne où récupérer les "value" pour les <option>, typiquement, la clé primaire
 * $display_col:  nom de la colonne (ou fonction MySQL) où récupérer les labels (affichés) des <option>
 * $WHERE:        paramètre optionnel permettant de limiter les valeurs retournées par la requête
 * $onchange:     paramètre optionnel permettant d'ajouter des paramètres au tag <select>, typiquement un handler JS onchange()
 * $option_sel:   paramètre optionnel permettant de présélectionner une <option>*/
function afficheselect($conn, $nom_table, $select_name, $value_col, $display_col, $WHERE="", $onchange="", $option_sel = ""){

$result = $conn->query("SELECT $value_col, $display_col FROM $nom_table $WHERE");

echo ("<SELECT name='$select_name' id='$select_name' $onchange>");
echo "<option value=''>---</option>";

/*on boucle sur toutes les lignes renvoyées*/
while ($row = $result->fetch_assoc()){

        /* Si on a un paramètre $option_sel, on compare la value actuelle à $option_sel pour
         * voir si c'est la ligne qu'on doit préselectionner */
        if ($option_sel != "" && $option_sel == $row[$value_col]) {
          /* c'est celle là : on met "selected" dans la variable $selectTag */
          $selectTag = "selected";

          /* on aura donc un echo qui écrira une chaîne du genre de :
           * <option selected value='1'>Diplome numéro 1</option>
           */
        } else {
          /* sinon, on met "" dans la variable $selectTag */
          $selectTag = "";

          /* on aura donc un echo qui écrira une chaîne du genre de :
           * <option  value='1'>Diplome numéro 1</option>
           */
        }

        echo "<option $selectTag value='" .$row[$value_col] . "'>" .$row[$display_col] . "</option>";
    }
    echo "</SELECT>";

/*on ferme le résultat*/
$result->close();
}
?>
