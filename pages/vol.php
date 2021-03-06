<!-- Ici sera la page ou on affichera le tableau des vol de la bdd -->
<h1 class = "font-regular-blue">Information / Vol</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class = "FrontBlock">
    <!-- Coder en dessous -->
    <div class = "IconCenter">
        <i class = "fas fa-plane-departure"></i>
    </div>

    <div class = "searchData">
        <form action = "#" method = "post">
            <input type = "text" name = "mot" placeholder = "Rechercher">
            <input type = "submit" name = "btn-sea" value = "search">
        </form>
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
            <?php
            if ($_SESSION['rolee'] == 'admin') {
                ?>
                <th>Opération</th>
            <?php } ?>
        </tr>
        <!-- Ici c'est en attendant mais faudra remplacer par le php -->
        <?php
        if (isset($_POST['btn-sea'])) {
            $lesVols = Search($_POST['mot'], "vol", "desivol", "duree");
        } else {
            $lesVols = Selection("vol");
        }
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
            if ($_SESSION['rolee'] == 'admin') {
                echo "<td>";
                echo "<a href='./Suppression.php?idvol=" . $unvol['idvol'] . "'>";
                echo "<button class='btn-danger btn' style='margin-right: 5px' name='btnDelete'><i class='fa-solid fa-trash-can'></i></button>";
                echo "</a>";
                echo "<a href='./EditVol.php?idvol=" . $unvol['idvol'] . "'>";
                echo "<button class='btn-primary btn'><i class='fa-solid fa-pen-to-square'></i></button>";
                echo "</a>";
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <?php

    if (isset($_GET['action']) && isset($_GET['idvol'])) {
        if ($_GET['action'] == 'edit') {
            require_once('./Components/EditVol.php');
        }
    }
    ?>

</div>
