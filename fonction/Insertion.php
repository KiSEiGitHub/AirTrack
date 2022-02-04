<!-- Fonction d'insertion -->
<?php
/*
Utiliser la fonction D'insertion

Rappel d'une fonction :
ça sert QUE quand le code se répète

En php, on définit une fonction avec le mot-clé "function" puis le nom de la fonction et en dernier des parenthèses.

Les parenthèses, elles servent à quoi ? Elles servent à contenir des paramètres.

C'est quoi un paramètre de fonction ? C'est des valeurs qu'on va devoir remplacer par des attributs.
C'est quoi les attributs, c'est des valeurs qu'on va insérer dans notre fonction UNIQUEMENT quand on l'appelera.

/!\ Règle n°1 IMPORTANT /!\
SI je spécifie 8 paramètres, JE DOIS TOUJOURS donner 8 attributs, même si on ne va pas les utiliser, je dois toujours
Mettre le même nombre de paramètres, sinon y a une erreur

La fonction insertion fait les insertions de toutes les tables, vue que vol ça a 8 paramètres, j'ai mis 8
Mais en dessous j'ai fait des if else pour chaque cas

*/
?>

<?php

/*
    Vue que vous devez spécifier toujours les 18 paramètres, entre les DBX et VALX,
    y'en à que vous devez pas utiliser. Normal
    Vous devez remplacer par "null"

    Exemple sur la page avion -> https://i.imgur.com/vmZ6e5o.png
*/

function Insertion(
    $table, // le nom de la table
    $DB1, // première valeur après ID sur la bdd
    $DB2, // deuxième valeur après ID sur la bdd
    $DB3, // troisième valeur après ID sur la bdd
    $DB4, // --------- valeur après ID sur la bdd
    $DB5, // --------- valeur après ID sur la bdd
    $DB6, // --------- valeur après ID sur la bdd
    $DB7, // --------- valeur après ID sur la bdd
    $DB8, // Huitième valeur après ID sur la bdd
    $VAL1, // les $_POST donc les "name" sur votre formulaire
    $VAL2, // les $_POST donc les "name" sur votre formulaire
    $VAL3, // les $_POST donc les "name" sur votre formulaire
    $VAL4, // les $_POST donc les "name" sur votre formulaire
    $VAL5, // les $_POST donc les "name" sur votre formulaire
    $VAL6, // les $_POST donc les "name" sur votre formulaire
    $VAL7, // les $_POST donc les "name" sur votre formulaire
    $VAL8, // les $_POST donc les "name" sur votre formulaire
    $length // le param le plus important, c'est lui qui va décider sur les if else, si vous avez 4 $_POST alors
    // length = 4
)
{
    $con = connexion();

    if ($length == 6) {
        $sql = "INSERT INTO $table($DB1, $DB2, $DB3, $DB4, $DB5, $DB6) VALUES ('$VAL1', '$VAL2', '$VAL3', '$VAL4', '$VAL5', '$VAL6')";
    } else if ($length == 3) {
        $sql = "INSERT INTO $table($DB1, $DB2, $DB3) VALUES ('$VAL1', '$VAL2', '$VAL3')";
    } else if ($length == 8) {
        $sql = "INSERT INTO $table($DB1, $DB2, $DB3, $DB4, $DB5, $DB6, $DB7, $DB8) VALUES ('$VAL1', '$VAL2', '$VAL3', '$VAL4', '$VAL5', '$VAL6', '$VAL7', '$VAL8')";
    } else if ($length == 4) {
        $sql = "INSERT INTO $table($DB1, $DB2, $DB3, $DB4) VALUES ('$VAL1', '$VAL2', '$VAL3', '$VAL4')";
    }

    if (mysqli_query($con, $sql)) {
        echo "<p class='text-success'>Insertion complétée</p>";
    } else {
        echo "<p>C'est pas bon</p>";
    }
}
