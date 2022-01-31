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

function CountAll($table)
{
    $r = "select count(*) as nb from $table;";
    $con = connexion();
    if ($con) {
        $res = mysqli_query($con, $r);
        $nb = mysqli_fetch_assoc($res);
    } else {
        return null;
    }
    deconnexion($con);
    return $nb['nb'];
}