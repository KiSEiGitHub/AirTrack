<?php

function UpdateVol($tab, $id)
{
    $r = "update vol set desivol = '" . $tab['numvol'] . "', duree = '" . $tab['durvol'] . "', datevole = '" . $tab['datevol']
        . "', idavion = '" . $tab['matriculeavion'] . "', idaeroport1 = '" . $tab['aerodepart'] . "', idaeroport2 = '" . $tab['aeroarrive'] .
        "', idpilote1 = '" . $tab['pilone'] . "', idpilote2 = '" . $tab['piltwo'] . "' where idvol = " . $id;

    $con = connexion();
    if ($con) {
        mysqli_query($con, $r);
    }

    deconnexion($con);
}
