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
?>

<?php
function afficheselect($conn, $nom_table, $select_name, $value_col, $display_col, $WHERE="", $onchange=""){


$result = $conn->query("SELECT $value_col, $display_col FROM $nom_table $WHERE");

echo ("<SELECT name='$select_name' id='$select_name' $onchange>");
echo "<option value=''>---</option>";

/*on boucle sur toutes les lignes renvoyées*/
while ($row = $result->fetch_assoc()){
        echo "<option value='" .$row[$value_col] . "'>" .$row[$display_col] . "</option>";
    }
    echo "</SELECT>";

/*on ferme le résultat*/
$result->close();
}
?>
