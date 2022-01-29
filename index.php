<?php
// Fonction qui sont importée
require_once('./fonction/Fonction.php');
require_once('./fonction/Insertion.php');
require_once('./fonction/Modification.php');
require_once('./fonction/Suppression.php');
require_once('./fonction/Selection.php');
require_once('./fonction/LinkFunction.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet avion</title>

    <!-- Css Perso -->
    <link rel="stylesheet" href="css/TopBar.css">
    <link rel="stylesheet" href="css/RightBar.css">
    <link rel="stylesheet" href="css/MainBlock.css">
    <link rel="stylesheet" href="css/Home.css">

    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- reset CSS + Global CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- CDN Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Top bar  -->
    <div class="Topbar">
        <img src="assets/logo.png" alt="logo">
        <div class="leftSide">
            <div class="PP"></div>
            <p>Admin</p>
        </div>
    </div>

    <!-- Right Bar menu blue -->
    <div class="RightBar">
        <h4 class="font-regular-white">Accueil</h4>
        <div class="block">
            <div>
                <div class="sous-block">
                    <i class="fas fa-tachometer-alt iconSpacing"></i>
                    <a href="index.php?page=0" style="position: relative; left: -2px">Tableau de bord</a>
                </div>
                <div class="sous-block">
                    <i class="fas fa-tasks iconSpacing"></i>
                    <a href="index.php?page=1">Tâches</a>
                </div>
            </div>
        </div>
        <h4 class="font-regular-white">Formulaire</h4>
        <div class="block">
            <div>
                <div class="sous-block">
                    <i class="fas fa-plane-departure iconSpacing"></i>
                    <a href="index.php?page=6">Vols</a>
                </div>
                <div class="sous-block">
                    <i class="fas fa-plane iconSpacing"></i>
                    <a href="index.php?page=7" style="position: relative; left: 2px">Avions</a>
                </div>
                <div class="sous-block">
                    <i class="fas fa-user-tie iconSpacing"></i>
                    <a href="index.php?page=8" style="position: relative; left: 7px">Pilotes</a>
                </div>
                <div class="sous-block">
                    <i class="fas fa-map-marker-alt iconSpacing"></i>
                    <a href="index.php?page=9" style="position: relative; left: 8px">Aéroport</a>
                </div>
            </div>
        </div>
        <h4 class="font-regular-white">Informations</h4>
        <div class="block">
            <div>
                <div class="sous-block">
                    <i class="fas fa-plane-departure iconSpacing"></i>
                    <a href="index.php?page=2">Vols</a>
                </div>
                <div class="sous-block">
                    <i class="fas fa-plane iconSpacing"></i>
                    <a href="index.php?page=3" style="position: relative; left: 2px">Avions</a>
                </div>
                <div class="sous-block">
                    <i class="fas fa-user-tie iconSpacing"></i>
                    <a href="index.php?page=4" style="position: relative; left: 7px">Pilotes</a>
                </div>
                <div class="sous-block">
                    <i class="fas fa-map-marker-alt iconSpacing"></i>
                    <a href="index.php?page=5" style="position: relative; left: 8px">Aéroport</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Block -->
    <!-- Ici sera la disposition des pages -->
    <div class="mainBlock">
        <div class="Sous-Main-Block">
            <?php
            if (isset($_GET['page'])) {
                LinkFunction($_GET['page']);
            } else {
                LinkFunction(0);
            }
            ?>
        </div>
    </div>

    <!-- CDN Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>