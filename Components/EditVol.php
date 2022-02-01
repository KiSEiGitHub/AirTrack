<?php $UnVol = selectWhere("vol", "idvol", $_GET['idvol']); ?>

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
                <input type = "number" name = "matriculeavion" value = <?php echo $UnVol['idavion'] ?>>
            </div>
        </div>
        <div class = "parent">
            <div>
                <label for = "aerodepart" class = "font-regular-blue-16">Aéroport de départ</label>
                <input type = "number" name = "aerodepart" value = <?php echo $UnVol['idaeroport1'] ?>>
            </div>
            <div>
                <label for = "aeroarrive" class = "font-regular-blue-16">Aéroport d'arrivé</label>
                <input type = "number" name = "aeroarrive" value = <?php echo $UnVol['idaeroport2'] ?>>
            </div>
        </div>
        <div class = "parent">
            <div>
                <label for = "pilone" class = "font-regular-blue-16">Pilote n°1</label>
                <input type = "number" name = "pilone" value = <?php echo $UnVol['idpilote1'] ?>>
            </div>
            <div>
                <label for = "piltwo" class = "font-regular-blue-16">Pilote n°2</label>
                <input type = "number" name = "piltwo" value = <?php echo $UnVol['idpilote2'] ?>>
            </div>
        </div>
        <div class = "btn-group">
            <input type = "submit" name = "btn-edit" value = "Modifier" class = "btn-danger" id="btn">
            <a href = "index.php?page=2" style="color: red">
                Redirection
            </a>
        </div>

    </form>
    <?php
    if (isset($_POST['btn-edit'])) {
        UpdateVol($_POST, $_GET['idvol']);
    }
    ?>
</div>

