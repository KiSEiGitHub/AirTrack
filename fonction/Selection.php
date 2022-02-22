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

function SelectionAdmin($pre)
{
    $con = connexion();
    $r = "SELECT * FROM admin WHERE prenom = '$pre'";

    if ($con) {
        $Data = mysqli_query($con, $r);
        $Single = mysqli_fetch_assoc($Data);
    } else {
        return null;
    }
    deconnexion($con);
    return $Single;
}

function SelectionPiloteFromVol($id) {
    $con = connexion();
    $r = "select prenom from pilote where idpilote = " . $id;

    if($con) {
        $Data = mysqli_query($con, $r);
        $Single = mysqli_fetch_assoc($Data);
    } else {
        return null;
    }
    deconnexion($con);
    return $Single;
}
