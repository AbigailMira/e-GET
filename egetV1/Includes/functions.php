<?php
function afficheselect($conn, $nom_table, $select_name, $value_col, $display_col){


$result = $conn->query("SELECT $value_col, $display_col FROM $nom_table");

echo ("<SELECT name='$select_name'>");

/*on boucle sur toutes les lignes renvoyées*/
while ($row = $result->fetch_assoc()){
        echo "<option value='" .$row[$value_col] . "'>" .$row[$display_col] . "</option>";
    }
    echo "</SELECT>";

/*on ferme le résultat*/
$result->close();
}
?>
