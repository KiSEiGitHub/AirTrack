<?php
session_start();

if (isset($_SESSION['pseudo'])) {
    header('Location: Home.php');
    exit;
}

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

<?php
/*
Fonction de connexion / déconnexion

Explication :
Quand on arrive sur le site, l'index.php est visé directement, c'est la première page qui charge
Alors la fonction de connexion est faite ici.

D'abord, je fais un formulaire qui prend un prénom et un mot de passe
Ensuite, c'est là que je fais du php pour controller si les deux champs sont enregistré dans la bdd

Les variables de session, c'est des variables qui vont être toujours active lors de l'utilisation du site
Quand on appuie sur le bouton déconnexion, ça lance une fonction session_destroy qui veut littéralement dire
Détruire la session, ensuite, ça nous renvoie directement ici, dans index.php pour se reconnecter

Si je ne suis pas connecté, je n'ai pas accès à Home.php qui est notre site et si je suis connecté
je n'ai pas accès à index.php logique

J'ai récréé une fonction SelectAdmin juste pour controler si les inputs qu'on rentre dans les champs sont égaux
à notre table admin

*/


?>

<div class="IconCenter">
<i class="fa-solid fa-right-to-bracket"></i>
</div>

<br>

<div class = "CoContainer">
    <h3>Connexion</h3>
<div class="spacer"></div>
    <form action = "#" method = "post">
        <input type = "text" name = "pre" placeholder = "Username">
        <input type = "password" name = "mdp" placeholder = "Mot de passe">
        <input type = "submit" name = "btn-co" value = "Connexion">
    </form>
    <?php

    if (isset($_POST['btn-co'])) {
        $psd = $_POST['pre'];
        $mdp = $_POST['mdp'];
        if (!empty($_POST['pre']) && !empty($_POST['mdp'])) {
            $con = connexion();

            $LesAdmin = SelectionAdmin($_POST['pre']);

            $_SESSION['pseudo'] = $LesAdmin['prenom'];
            $_SESSION['password'] = $LesAdmin['pass'];

            if ($psd == $_SESSION['pseudo'] && $mdp == $_SESSION['password']) {
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