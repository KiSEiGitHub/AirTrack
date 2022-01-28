<!-- Fonction de selection  -->
<?php
function Selection($table)
{
    $con = connexion();
    $r = "SELECT * FROM $table";

    if ($con) {
        $Data = mysqli_query($con, $r);
    } else {
        return null;
    }
    deconnexion($con);
    return $Data;
}
