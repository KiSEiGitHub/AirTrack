<?php
session_start();

if ($_SESSION['pseudo'] == null) {
    header('Location: index.php');
    exit;
}
// Fonction qui son importée
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
    <link rel = "stylesheet" href = "css/Connexion.css">
    <link rel = "stylesheet" href = "css/footer.css">
    <link rel = "stylesheet" href = "css/taches.css">

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

<div class = "Topbar">
    <a href = "Home.php" style="display: inline">
         <img src = "assets/logo.png" alt = "logo">
    </a>
    <div class = "leftSide">
        <div class = "PP">
            <?php
            if ($_SESSION['pseudo'] == 'Clara') {
                echo "<img src='./assets/img_Clara.jpg' alt='pp' />";
            } else if ($_SESSION['pseudo'] == 'Salim') {
                echo "<img src='./assets/img_Salim.jpg' alt='pp' />";
            } else if ($_SESSION['pseudo'] == 'Tom') {
                echo "<img src='./assets/img_Tom.jpg' alt='pp' />";
            } else {
                echo "<i class='fa-solid fa-user-check' style='font-size: 30px'></i>";
            }
            ?>
        </div>
        <span class = "badge bg-primary" style = "position:relative; left: 20px; top: -12px">
            <?php echo $_SESSION['pseudo'] ?>
        </span>
        <span class = "badge bg-danger" style = "position:relative; left: -20px; top: 12px">
           <?php echo $_SESSION['rolee'] ?>
        </span>
    </div>

</div>

<?php
require_once('./Components/Rightbar.php');

?>

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

<?php require_once('./Components/Footer.php') ?>

<!--  js  -->
<script src = "main.js"></script>
<!-- CDN Bootstrap JS -->
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin = "anonymous"></script>
</body>

</html>