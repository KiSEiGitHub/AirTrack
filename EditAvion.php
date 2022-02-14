<link rel = "stylesheet" href = "style.css">
<?php
require_once('./fonction/Fonction.php');
require_once('./fonction/Insertion.php');
require_once('./fonction/Modification.php');
require_once('./fonction/Suppression.php');
require_once('./fonction/Selection.php');
require_once('./fonction/LinkFunction.php');
require_once('./fonction/Update.php');
$unAvion = selectWhere("avion", "idavion", $_GET['idavion']);
?>
<div class = "Formulaire">
    <?php echo "<h3>Modification de l'avion " . $unAvion['marque'] . "</h3>" ?>
    <form action = "#" method = "POST">

        <div class = "parent">
            <div>
                <label for = "marque" class = "font-regular-blue-16">Marque</label>
                <input type = "text" name = "marque" id = "marque" value = <?php echo $unAvion['marque'] ?>>
            </div>
            <div>
                <label for = "etat" class = "font-regular-blue-16">État</label>
                <input type = "text" name = "etat" id = "etat" value = <?php echo $unAvion['etat'] ?>>
            </div>
        </div>

        <div class = "parent">
            <div>
                <label for = "nbplaces" class = "font-regular-blue-16">État</label>
                <input type = "text" name = "nbplaces" id = "nbplaces" value = <?php echo $unAvion['nbplaces'] ?>>
            </div>
            <div>
                <label for = "Type" class = "font-regular-blue-16">Type</label>
                <input type = "text" name = "typeavion" id = "etat" value = <?php echo $unAvion['typeavion'] ?>>
            </div>
        </div>
        <div class = "btn-group">
            <input type = "submit" name = "btn-edit2" value = "Modifier" class = "btn-danger"
                   style = "cursor: pointer">
        </div>
    </form>
</div>
<?php
if (isset($_POST['btn-edit2'])) {
    UpdateAvion($_POST, $_GET['idavion']);
    header('Location: Home.php?page=3');
}
