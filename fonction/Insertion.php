<!-- Fonction d'insertion -->
<?php
function Insertion(
    $table,
    $DB1,
    $DB2,
    $DB3,
    $DB4,
    $DB5,
    $DB6,
    $DB7,
    $DB8,
    $VAL1,
    $VAL2,
    $VAL3,
    $VAL4,
    $VAL5,
    $VAL6,
    $VAL7,
    $VAL8,
    $length
) {
    $con = connexion();

    if ($length == 6) {
        $sql = "INSERT INTO $table($DB1, $DB2, $DB3, $DB4, $DB5, $DB6) VALUES ('$VAL1', '$VAL2', '$VAL3', '$VAL4', '$VAL5', '$VAL6')";
    } else if ($length == 3) {
        $sql = "INSERT INTO $table($DB1, $DB2, $DB3) VALUES ('$VAL1', '$VAL2', '$VAL3')";
    } else if ($length == 8) {
        $sql = "INSERT INTO $table($DB1, $DB2, $DB3, $DB4, $DB5, $DB6, $DB7, $DB8) VALUES ('$VAL1', '$VAL2', '$VAL3', '$VAL4', '$VAL5', '$VAL6', '$VAL7', '$VAL8')";
    } else if ($length == 4) {
        $sql = "INSERT INTO $table($DB1, $DB2, $DB3, $DB4) VALUES ('$VAL1', '$VAL2', '$VAL3', '$VAL4')";
    }

    if (mysqli_query($con, $sql)) {
        echo "<p class='text-success'>Insertion complétée</p>";
    } else {
        echo "<p>C'est pas bon</p>";
    }
}
