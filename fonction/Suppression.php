<!-- Fonction de suppression -->
<?php
function Suppression($table, $idtable, $idget)
{
    $con = connexion();

    if ($con) {
        $r = "SELECT from $table where $idtable =" . $idget;
        mysqli_query($con, $r);
        mysqli_close($con);
    }
}
