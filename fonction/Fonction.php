<?php

function connexion()
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "avion_bdd"
    );;

    if ($con == null) {
        echo "Erreur de connexion à la bdd";
    }
    return $con;
}

function deconnexion($con)
{
    mysqli_close($con);
}