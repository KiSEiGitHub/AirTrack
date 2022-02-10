<!-- Ici sera la page ou on affichera le tableau des vol de la bdd -->
<h1 class = "font-regular-blue">Information / Vol</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class = "FrontBlock">
    <!-- Coder en dessous -->
    <div class = "IconCenter">
        <i class = "fas fa-plane-departure"></i>
    </div>

    <table class = "tableau">
        <tr>
            <th>N° de vol</th>
            <th>Durée</th>
            <th>Date</th>
            <th>Matricule de l'avion</th>
            <th>Aéroport de départ</th>
            <th>Aéroport d'arrivé</th>
            <th>Pilote N°1</th>
            <th>Pilote N°2</th>
            <th>Opération</th>
        </tr>
        <!-- Ici c'est en attendant mais faudra remplacer par le php -->
        <?php
        $lesVols = Selection("vol");
        foreach ($lesVols as $unvol) {
            echo "<tr>";
            echo "<td>" . $unvol['desivol'] . "</td>";
            echo "<td>" . $unvol['duree'] . "</td>";
            echo "<td>" . $unvol['datevole'] . "</td>";
            echo "<td>" . $unvol['idavion'] . "</td>";
            echo "<td>" . $unvol['idaeroport1'] . "</td>";
            echo "<td>" . $unvol['idaeroport2'] . "</td>";
            echo "<td>" . $unvol['idpilote1'] . "</td>";
            echo "<td>" . $unvol['idpilote2'] . "</td>";
            echo "<td>";
            echo "<a href='home.php?page=2&action=sup&idvol=" . $unvol['idvol'] . "'>";
            echo "<button class='btn-danger btn' style='margin-right: 5px' name='btnDelete'>Supprimer</button>";
            echo "</a>";
            echo "<a href='home.php?page=2&action=edit&idvol=" . $unvol['idvol'] . "'>";
            echo "<button class='btn-primary btn'>Modifier</button>";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php

    if (isset($_GET['action']) && isset($_GET['idvol'])) {
        if ($_GET['action'] == 'sup') {
            Suppression("vol", "idvol", $_GET['idvol']);
        } else if ($_GET['action'] == 'edit') {
            require_once('./Components/EditVol.php');
        }

    }
    ?>

</div>
