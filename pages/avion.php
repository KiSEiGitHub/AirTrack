<!-- Ici sera la page ou on affichera le tableau des avions de la bdd -->
<h1 class="font-regular-blue">Information / Avions</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class="FrontBlock">
    <!-- Coder en dessous -->
    <!-- L'icon -->
    <div class="IconCenter">
        <i class="fas fa-plane"></i>
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
        $lesAvions = Selection("avion");
        foreach ($lesAvions as $unavion) {
            echo "<tr>";
            echo "<td>" . $unavion['marque'] . "</td>";
            echo "<td>" . $unavion['etat'] . "</td>";
            echo "<td>" . $unavion['nbplaces'] . "</td>";
            echo "<td>" . $unavion['typeavion'] . "</td>";
            echo "<td>";
            echo "<a href='index.php?page=2&action=sup&idavion=" . $unavion['idavion'] . "'>";
            echo "<button class='btn-danger btn' style='margin-right: 5px' name='btnDelete'>Supprimer</button>";
            echo "</a>";
            echo "<a href='index.php?page=2&action=edit&idavion=" . $unavion['idavion'] . "'>";
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

    </table>