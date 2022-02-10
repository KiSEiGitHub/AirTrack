<!-- Ici sera la page ou on affichera le tableau des avions de la bdd -->
<h1 class="font-regular-blue">Information / Avion</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class="FrontBlock">
    <!-- Coder en dessous -->
    <!-- L'icon -->
    <div class="IconCenter">
        <i class="fas fa-plane"></i>
    </div>

    <div class="searchData">
        <form action="#" method="post">
            <input type="text" name="mot" placeholder="Rechercher">
            <input type="submit" namne="btn-sea" value="search">
        </form>
    </div>

    <table class="tableau">
        <tr>
            <th>Marque</th>
            <th>État</th>
            <th>Nombre de places</th>
            <th>Type</th>
            <th>Opération</th>
        </tr>

        <?php
        if(isset($_POST['btn-sea'])){
            $lesAvions = Search($_POST['mot'], "avion", "marque", "typeavion");
        } else {
            $lesAvions = Selection("avion");
        }
        foreach ($lesAvions as $unavion) {
            echo "<tr>";
            echo "<td>" . $unavion['marque'] . "</td>";
            echo "<td>" . $unavion['etat'] . "</td>";
            echo "<td>" . $unavion['nbplaces'] . "</td>";
            echo "<td>" . $unavion['typeavion'] . "</td>";
            echo "<td>";
            echo "<a href='home.php?page=3&action=sup&idavion=" . $unavion['idavion'] . "'>";
            echo "<button class='btn-danger btn' style='margin-right: 5px' name='btnDelete'>Supprimer</button>";
            echo "</a>";
            echo "<a href='home.php?page=3&action=edit&idavion=" . $unavion['idavion'] . "'>";
            echo "<button class='btn-primary btn'>Modifier</button>";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php

    if (isset($_GET['action']) && isset($_GET['idavion'])) {
        if ($_GET['action'] == 'sup') {
            Suppression("avion", "idavion", $_GET['idavion']);
        } else if ($_GET['action'] == 'edit') {
            require_once('./Components/EditAvion.php');
        }

    }
    ?>
</div>
