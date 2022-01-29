<?php
// fonciton qui fait les liens entre le menu et les pages

function LinkFunction($PageNumber)
{
    switch ($PageNumber) {
        case 0:
            require_once('./pages/Home.php');
            break;
        case 2:
            require_once('./pages/vol.php');
            break;
        case 3:
            require_once('./pages/avion.php');
            break;
        case 4:
            require_once('./pages/pilote.php');
            break;
        case 5:
            require_once('./pages/aeroport.php');
            break;
        case 6:
            require_once('./vues/vol.php');
            break;
        case 7:
            require_once('./vues/avion.php');
            break;
        case 8:
            require_once('./vues/pilote.php');
            break;
        case 9:
            require_once('./vues/aeroport.php');
            break;
    }
}
