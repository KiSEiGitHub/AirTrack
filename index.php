<?php
session_start();
if(isset($_SESSION['pseudo'])){
    header('Location: Home.php');
    exit();
}
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
    <link rel = "stylesheet" href = "css/Connexion.css">

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
<div class = "CoContainer">
    <h3>Connexion</h3>
    <form action = "#" method = "post">
        <input type = "text" name = "pseudo" placeholder = "pseudo">
        <input type = "text" name = "mdp" placeholder = "mot de passe">
        <input type = "submit" name = "btn-co" value = "Connexion">
    </form>
    <?php

    $psd = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $_SESSION['pseudo'] = "Tom";
    $_SESSION['mdp'] = 1234;

    if (isset($_POST['btn-co'])) {
        if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
            if ($psd == "Tom" && $mdp == 1234) {
                header('Location: Home.php');
            } else {
                echo "<p class='text-warning'>Mot de passe ou pseudo incorrect</p>";
            }
        } else {
            echo "<p class='text-danger'>Remplir tous les champs</p>";
        }
    }
    ?>
</div>

<!--  js  -->
<script src = "main.js"></script>
<!-- CDN Bootstrap JS -->
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin = "anonymous"></script>
</body>

</html>