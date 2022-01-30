<!-- Ici sera la page ou on affichera le tableau des vol de la bdd -->
<h1 class="font-regular-blue">Information / Vols</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class="FrontBlock">
    <!-- Coder en dessous -->
    <div class="IconCenter">
        <i class="fas fa-plane-departure"></i>
    </div>

    <table class="tableau">
        <tr>
            <th>N° de vol</th>
            <th>Durée</th>
            <th>Date</th>
            <th>Matricule de l'avion</th>
            <th>Aéroport de départ</th>
            <th>Aéroport d'arrivé</th>
            <th>Pilote N°1</th>
            <th>Pilote N°2</th>
        </tr>
        <!-- Ici c'est en attendant mais faudra remplacer par le php -->
        <?php
        $lesVols = Selection("vol");
        foreach ($lesVols as $unvol) {
            echo "<tr>";
                echo "<td>". $unvol['desivol']. "</td>";
                echo "<td>". $unvol['duree']. "</td>";
                echo "<td>". $unvol['datevole']. "</td>";
                echo "<td>". $unvol['idavion']. "</td>";
                echo "<td>". $unvol['idaeroport1']. "</td>";
                echo "<td>". $unvol['idaeroport2']. "</td>";
                echo "<td>". $unvol['idpilote1']. "</td>";
                echo "<td>". $unvol['idpilote2']. "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</div>