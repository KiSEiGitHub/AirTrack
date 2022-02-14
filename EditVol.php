<link rel = "stylesheet" href = "style.css">
<?php
require_once('./fonction/Fonction.php');
require_once('./fonction/Insertion.php');
require_once('./fonction/Modification.php');
require_once('./fonction/Suppression.php');
require_once('./fonction/Selection.php');
require_once('./fonction/LinkFunction.php');
require_once('./fonction/Update.php');

$UnVol = selectWhere("vol", "idvol", $_GET['idvol']);
?>
<div class = "Formulaire">
    <?php echo "<h3>Modification du vol " . $UnVol['desivol'] . "</h3>" ?>

    <form action = "#" method = "POST">
        <div class = "parent">
            <div>
                <label for = "Numvol" class = "font-regular-blue-16">Numéro de vol</label>
                <input type = "text" name = "numvol" value = <?php echo $UnVol['desivol'] ?>>
            </div>
            <div>
                <label for = "durvol" class = "font-regular-blue-16">Durée du vol (en minutes)</label>
                <input type = "text" name = "durvol" value = <?php echo $UnVol['duree'] ?>>
            </div>
        </div>
        <div class = "parent">
            <div>
                <label for = "datevol" class = "font-regular-blue-16">Date du vol</label>
                <input type = "date" name = "datevol" value = <?php echo $UnVol['datevole'] ?>>
            </div>
            <div>
                <label for = "matriculeavion" class = "font-regular-blue-16">Matricule de l'avion</label>
                <select name = "matriculeavion" id = "matriculeavion">
                    <option value = <?php echo $UnVol['idavion'] ?>>
                        <?php echo $UnVol['idavion'] ?>
                    </option>
                    <?php
                    $LesAvions = Selection("avion");
                    foreach ($LesAvions as $unAvion) {
                        echo "<option value='" . $unAvion['idavion'] . "'>";
                        echo $unAvion['marque'];
                        echo "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class = "parent" style = "margin-bottom: 25px">
            <div>
                <label for = "aerodepart" class = "font-regular-blue-16">Aéroport de départ</label>
                <select name = "aerodepart" id = "aerodepart">
                    <option value = <?php echo $UnVol['idaeroport1'] ?>>
                        <?php echo $UnVol['idaeroport1'] ?>
                    </option>
                    <?php
                    $LesAero = Selection('aeroport');
                    foreach ($LesAero as $UnAero) {
                        echo "<option value='" . $UnAero['idaeroport'] . "'>";
                        echo $UnAero['desiaero'] . " " . $UnAero['adresse'];
                        echo "</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for = "aeroarrive" class = "font-regular-blue-16">Aéroport d'arrivé</label>
                <select name = "aeroarrive" id = "aeroarrive">
                    <option value = <?php echo $UnVol['idaeroport2'] ?>>
                        <?php echo $UnVol['idaeroport2'] ?>
                    </option>
                    <?php
                    $LesAero = Selection('aeroport');
                    foreach ($LesAero as $UnAero) {
                        echo "<option value='" . $UnAero['idaeroport'] . "'>";
                        echo $UnAero['desiaero'] . " " . $UnAero['adresse'];
                        echo "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class = "parent">
            <div>
                <label for = "pilone" class = "font-regular-blue-16">Pilote n°1</label>
                <select name = "pilone" id = "pilone">
                    <option value = <?php echo $UnVol['idpilote1'] ?>>
                        <?php echo $UnVol['idpilote1'] ?>
                    </option>
                    <?php
                    $LesPilotes = Selection("pilote");
                    foreach ($LesPilotes as $Pilote) {
                        echo "<option value='" . $Pilote['idpilote'] . "'>";
                        echo $Pilote['prenom'] . " " . $Pilote['nom'];
                        echo "</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for = "piltwo" class = "font-regular-blue-16">Pilote n°2</label>
                <select name = "piltwo" id = "piltwo">
                    <option value = <?php echo $UnVol['idpilote2'] ?>>
                        <?php echo $UnVol['idpilote2'] ?>
                    </option>
                    <?php
                    $LesPilotes = Selection("pilote");
                    foreach ($LesPilotes as $Pilote) {
                        echo "<option value='" . $Pilote['idpilote'] . "'>";
                        echo $Pilote['prenom'] . " " . $Pilote['nom'];
                        echo "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class = "btn-group">
            <input type = "submit" name = "btn-edit" value = "Modifier" class = "btn-danger"
                   style = "cursor: pointer">
        </div>

    </form>
    <?php
    if (isset($_POST['btn-edit'])) {
        UpdateVol($_POST, $_GET['idvol']);
        header('Location: Home.php?page=2');
    }
    ?>
</div>