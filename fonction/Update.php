<?php

function UpdateVol($tab, $id)
{
    $r = "
        update vol set 
       desivol = '" . $tab['numvol'] . "', 
        duree = '" . $tab['durvol'] . "', 
        datevole = '" . $tab['datevol'] . "', 
        idavion = '" . $tab['matriculeavion'] . "', 
        idaeroport1 = '" . $tab['aerodepart'] . "', 
        idaeroport2 = '" . $tab['aeroarrive'] .
        "', idpilote1 = '" . $tab['pilone'] . "', 
        idpilote2 = '" . $tab['piltwo'] . "' 
        where idvol = $id
    ";

    $con = connexion();
    if ($con) {
        mysqli_query($con, $r);
    }

    deconnexion($con);
}

function UpdateAvion($tab, $id)
{
    $r = "
        update avion set 
        marque = '" . $tab['marque'] . "', 
        etat = '" . $tab['etat'] . "', 
        nbplaces = '" . $tab['nbplaces'] . "', 
        typeavion = '" . $tab['typeavion'] . "' 
        where idavion = $id
    ";

    $con = connexion();
    if ($con) {
        mysqli_query($con, $r);
    }

    deconnexion($con);
}

function UpdatePilote($tab, $id)
{
    $r = "
        update pilote set 
        nom = '" . $tab['nompilote'] . "',
        prenom = '" . $tab['prenompilote'] . "',
        age = '" . $tab['agepilote'] . "',
        email = '" . $tab['emailpilote'] . "',
        adresse = '" . $tab['adressepilote'] . "',
        grade = '" . $tab['gradepilote'] . "'
        WHERE idpilote = $id
        ";

    $con = connexion();
    if ($con) {
        mysqli_query($con, $r);
    }

    deconnexion($con);
}