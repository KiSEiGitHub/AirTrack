<link rel = "stylesheet" href = "style.css">
<?php
require_once('./fonction/Fonction.php');
require_once('./fonction/Insertion.php');
require_once('./fonction/Modification.php');
require_once('./fonction/Suppression.php');
require_once('./fonction/Selection.php');
require_once('./fonction/LinkFunction.php');
require_once('./fonction/Update.php');

$unPilote = selectWhere("pilote", "idpilote", $_GET['idpilote']);
?>
<div class = "Formulaire">
    <?php echo "<h3>Modification du pilote " . $unPilote['prenom'] . "</h3>" ?>
    <form action = "#" method = "POST">

        <div class = "parent">
            <div>
                <label for = "prenompilote" class = "font-regular-blue-16">Prénom</label>
                <input type = "text" name = "prenompilote" id = "prenompilote"
                       value = <?php echo $unPilote['prenom'] ?>>
            </div>
            <div>
                <label for = "nompilote" class = "font-regular-blue-16">Nom</label>
                <input type = "text" name = "nompilote" id = "nompilote"
                       value = <?php echo $unPilote['nom'] ?>>
            </div>
        </div>

        <div class = "parent">
            <div>
                <label for = "agepilote" class = "font-regular-blue-16">Âge</label>
                <input type = "text" name = "agepilote" id = "agepilote" value = <?php echo $unPilote['age'] ?>>
            </div>
            <div>
                <label for = "gradepilote" class = "font-regular-blue-16">Grade</label>
                <input type = "text" name = "gradepilote" id = "gradepilote"
                       value = <?php echo $unPilote['grade'] ?>>
            </div>
        </div>

        <label for = "emailpilote" class = "font-regular-blue-16">Email</label>
        <input type = "text" name = "emailpilote" id = "emailpilote" value = <?php echo $unPilote['email'] ?>>

        <label for = "adressepilote" class = "font-regular-blue-16">Adresse</label>
        <input type = "text" name = "adressepilote" id = "adressepilote" value = <?php echo $unPilote['adresse'] ?>>

        <div class = "btn-group">
            <input type = "submit" name = "btn-edit3" value = "Modifier" class = "btn-danger"
                   style = "cursor: pointer">
        </div>
    </form>
</div>
<?php
if (isset($_POST['btn-edit3'])) {
    UpdatePilote($_POST, $_GET['idpilote']);
    header('Location: Home.php?page=4');
}
?>