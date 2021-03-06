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

function selectWhere($table, $idtable, $idget)
{
    $r = "select * from $table where $idtable = " . $idget;
    $con = connexion();

    if ($con) {
        $AllData = mysqli_query($con, $r);
        $Data = mysqli_fetch_assoc($AllData);
    } else {
        return null;
    }

    deconnexion($con);
    return $Data;
}

function Search($mot, $table, $name1, $name2)
{
    $r = "select * from $table where $name1 like '%" . $mot . "%' or $name2 like '%" . $mot . "%';";
    $con = connexion();

    if ($con) {
        $lesClients = mysqli_query($con, $r);
    } else {
        return null;
    }

    deconnexion($con);
    return $lesClients;
}

function SearchPlane($mot)
{
    $r = "select * from avion where marque like '%'" . $mot . "%'";
    $con = connexion();

    if ($con) {
        $Data = mysqli_query($con, $r);
    } else {
        return null;
    }

    deconnexion($con);
    return $Data;
}

function SelectPiloteFromVol($id)
{
    $con = connexion();
    $r = "select * from vol where idpilote1 = $id or idpilote2 = $id";

    if ($con) {
        $Data = mysqli_query($con, $r);
        $Dataa = mysqli_fetch_assoc($Data);
    } else {
        return null;
    }

    deconnexion($con);
    return $Dataa;
}