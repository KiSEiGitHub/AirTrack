<?php $unAvion = selectWhere("avion", "idavion", $_GET['idavion']); ?>

<div class = "Formulaire">
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
            <input type = "submit" name = "btn-edit" value = "Modifier" class = "btn-danger" id = "btn">
            <a href = "Home.php?page=3" style = "color: red">
                Redirection
            </a>
        </div>
    </form>
    <?php
    if (isset($_POST['btn-edit'])) {
        UpdateAvion($_POST, $_GET['idavion']);
    }
    ?>
</div>