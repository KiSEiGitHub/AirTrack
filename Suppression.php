<?php
require_once('./fonction/Fonction.php');
require_once('./fonction/Insertion.php');
require_once('./fonction/Modification.php');
require_once('./fonction/Suppression.php');
require_once('./fonction/Selection.php');
require_once('./fonction/LinkFunction.php');
require_once('./fonction/Update.php');

if ($_GET['idaeroport']) {
    Suppression("aeroport", "idaeroport", $_GET['idaeroport']);
    header('Location: Home.php?page=5');
} else if ($_GET['idavion']) {
    var_dump('aero');
    Suppression("avion", "idavion", $_GET['idavion']);
    header('Location: Home.php?page=3');
} else if ($_GET['idpilote']) {
    Suppression("pilote", "idpilote", $_GET['idpilote']);
    header('Location: Home.php?page=4');
} else if ($_GET['idvol']) {
    Suppression("vol", "idvol", $_GET['idvol']);
    header('Location: Home.php?page=2');
}