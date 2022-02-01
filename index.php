<?php
// Fonction qui sont importée
require_once('./fonction/Fonction.php');
require_once('./fonction/Insertion.php');
require_once('./fonction/Modification.php');
require_once('./fonction/Suppression.php');
require_once('./fonction/Selection.php');
require_once('./fonction/LinkFunction.php');
require_once('./fonction/Update.php');
?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Projet avion</title>

    <!-- Css Perso -->
    <link rel = "stylesheet" href = "css/TopBar.css">
    <link rel = "stylesheet" href = "css/RightBar.css">
    <link rel = "stylesheet" href = "css/MainBlock.css">
    <link rel = "stylesheet" href = "css/Home.css">

    <!-- CDN Bootstrap CSS -->
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel = "stylesheet"
          integrity = "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin = "anonymous">

    <!-- reset CSS + Global CSS -->
    <link rel = "stylesheet" href = "style.css">

    <!-- CDN Font awesome-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<!-- Top bar  -->
<?php require_once('./Components/Topbar.php') ?>

<!-- Right Bar menu blue -->
<?php require_once('./Components/Rightbar.php') ?>

<!-- Main Block -->
<!-- Ici sera la disposition des pages -->
<div class = "mainBlock">
    <div class = "Sous-Main-Block">
        <?php
        if (isset($_GET['page'])) {
            LinkFunction($_GET['page']);
        } else {
            LinkFunction(0);
        }
        ?>
    </div>
</div>


<!--  js  -->
<script src = "main.js"></script>
<!-- CDN Bootstrap JS -->
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin = "anonymous"></script>
</body>

</html>