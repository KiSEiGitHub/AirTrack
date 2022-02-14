<link rel = "stylesheet" href = "style.css">
<?php
require_once('./fonction/Fonction.php');
require_once('./fonction/Insertion.php');
require_once('./fonction/Modification.php');
require_once('./fonction/Suppression.php');
require_once('./fonction/Selection.php');
require_once('./fonction/LinkFunction.php');
require_once('./fonction/Update.php');
$UnAero = selectWhere("aeroport", "idaeroport", $_GET['idaeroport']);
?>
<div class = "Formulaire">
    <?php echo "<h3>Modification l'aéroport " . $UnAero['desiaero'] . "</h3>" ?>
    <form action = "#" method = "POST">
        <div class = "parent">
            <div>
                <label for = "nomaeroport" class = "font-regular-blue-16">Nom</label>
                <input type = "text" name = "nomaeroport" id = "nomaeroport"
                       value = <?php echo $UnAero['desiaero'] ?>>
            </div>
            <div>
                <label for = "statutaeroport" class = "font-regular-blue-16">Statut</label>
                <input type = "text" name = "statutaeroport" id = "statutaeroport"
                       value = <?php echo $UnAero['statut']
                ?>>
            </div>
        </div>
        <label for = "adresseaeroport" class = "font-regular-blue-16">Adresse</label>
        <input type = "text" name = "adresseaeroport" id = "adresseaeroport"
               value = <?php echo $UnAero['adresse'] ?>>

        <div class = "btn-group">
            <input type = "submit" name = "btn-edit" value = "Modifier" class = "btn-danger"
                   style = "cursor: pointer">
        </div>
    </form>
</div>
<?php
if (isset($_POST['btn-edit'])) {
    UpdateAeroport($_POST, $_GET['idaeroport']);
    header('Location: Home.php?page=5');
}