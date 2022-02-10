<!-- Ici sera la page ou on affichera le tableau des avions de la bdd -->
<h1 class = "font-regular-blue">Information / Aéroport</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class = "FrontBlock">
    <!-- Coder en dessous -->
    <!-- L'icon -->
    <div class = "IconCenter">
         <i class="fa-solid fa-location-dot"></i>
    </div>

    <table class = "tableau">
        <tr>
            <th>Nom</th>
            <th>Statut</th>
            <th>Adresse</th>
            <th>Opération</th>
        </tr>

        <?php
        $lesAeroports = Selection("aeroport");
        foreach ($lesAeroports as $unaeroport) {
            echo "<tr>";
            echo "<td>" . $unaeroport['desiaero'] . "</td>";
            echo "<td>" . $unaeroport['adresse'] . "</td>";
            echo "<td>" . $unaeroport['statut'] . "</td>";
            echo "<td>";
            echo "<a href='home.php?page=4&action=sup&idaeroport=" . $unaeroport['idaeroport'] . "'>";
            echo "<button class='btn-danger btn' style='margin-right: 5px' name='btnDelete'>Supprimer</button>";
            echo "</a>";
            echo "<a href='home.php?page=4&action=edit&idaeroport=" . $unaeroport['idaeroport'] . "'>";
            echo "<button class='btn-primary btn'>Modifier</button>";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php

    if (isset($_GET['action']) && isset($_GET['idaeroport'])) {
        if ($_GET['action'] == 'sup') {
            Suppression("aeroport", "idaeroport", $_GET['idaeroport']);
        } else if ($_GET['action'] == 'edit') {
            require_once('./Components/EditAvion.php');
        }

    }
    ?>
</div>
