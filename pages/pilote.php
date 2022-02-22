<!-- Ici sera la page ou on affichera le tableau des pilotes de la bdd -->
<h1 class = "font-regular-blue">Information / Pilote</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class = "FrontBlock">
    <!-- Coder en dessous -->
    <div class = "IconCenter">
        <i class = "fas fa-user-tie"></i>
    </div>

    <div class = "searchData">
        <form action = "#" method = "post">
            <input type = "text" name = "mot" placeholder = "Rechercher">
            <input type = "submit" name = "btn-sea" value = "search">
        </form>
    </div>
    <table class = "tableau">
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Âge</th>
            <th>Grade</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Opération</th>
        </tr>

        <?php
        if (isset($_POST['btn-sea'])) {
            $lesPilotes = Search($_POST['mot'], "pilote", "prenom", "nom");
        } else {
            $lesPilotes = Selection("pilote");
        }
        foreach ($lesPilotes as $unpilote) {
            echo "<tr>";
            echo "<td>" . $unpilote['prenom'] . "</td>";
            echo "<td>" . $unpilote['nom'] . "</td>";
            echo "<td>" . $unpilote['age'] . "</td>";
            echo "<td>" . $unpilote['grade'] . "</td>";
            echo "<td>" . $unpilote['email'] . "</td>";
            echo "<td>" . $unpilote['adresse'] . "</td>";
            if ($_SESSION['rolee'] == 'admin') {
                echo "<td>";
                echo "<a href='./Suppression.php?idpilote=" . $unpilote['idpilote'] . "'>";
                echo "<button class='btn-danger btn' style='margin-right: 5px' name='btnDelete'><i class='fa-solid fa-trash-can'></i></button>";
                echo "</a>";
                echo "<a href='./EditPilote.php?idpilote=" . $unpilote['idpilote'] . "'>";
                echo "<button class='btn-primary btn'><i class='fa-solid fa-pen-to-square'></i></button>";
                echo "</a>";
                echo "<a href='Home.php?page=4&action=loupe&idpilote=" . $unpilote['idpilote'] . "'>";
                echo "<button class='btn-dark btn' style='margin-left: 5px'><i class='fa-solid fa-magnifying-glass'></i></button>";
                echo "</a>";
                echo "</td>";
            }
            echo "<td>";
            if ($_SESSION['rolee'] == 'user') {
                echo "<td>";
                echo "<a href='Home.php?page=4&action=loupe&idpilote=" . $unpilote['idpilote'] . "'>";
                echo "<button class='btn-dark btn' style='margin-left: 5px'><i class='fa-solid fa-magnifying-glass'></i></button>";
                echo "</a>";
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <?php
    if (isset($_GET['action'])){
    if ($_GET['action'] == 'loupe'){
    ?>
    <div style = "text-align: center; margin-top: 30px; font-size: 25px">
        <span>Information du pilote : </span>
        <?php
        $Pilo = SelectionPiloteFromVol($_GET['idpilote']);
        echo "<span style='color: #ff0033'>" . $Pilo['prenom'] . "</span>";
        ?>
    </div>
    <div style = "width: 400px; margin: 0 auto">
        <?php
        $LesVols = SelectPiloteFromVol($_GET['idpilote']);
        $Avion = selectWhere("avion", "idavion", $LesVols['idavion']);
        $Pilote2 = selectWhere("pilote", "idpilote", $LesVols['idpilote2']);
        $Pilote1 = selectWhere("pilote", "idpilote", $LesVols['idpilote1']);
        $Aero1 = selectWhere("aeroport", "idaeroport", $LesVols['idaeroport1']);
        $Aero2 = selectWhere("aeroport", "idaeroport", $LesVols['idaeroport2']);
        echo "<span class='span-info'>Nom du vol : </span>";
        echo "<span class='span-resultat'>" . $LesVols['desivol'] . "</span>";
        echo "<br>";
        echo "<span class='span-info'>Durée du vol : </span>";
        echo "<span class='span-resultat'>" . $LesVols['duree'] . " minutes</span>";
        echo "<br>";
        echo "<span class='span-info'>Nom de l'avion : </span>";
        echo "<span class='span-resultat'>" . $Avion['marque'] . "</span>";
        echo "<br>";
        echo "<span class='span-info'>Aéroport de départ : </span>";
        echo "<span class='span-resultat'>" . $Aero1['desiaero'] . "</span>";
        echo "<br>";
        echo "<span class='span-info'>Aéroport de d'arrivée : </span>";
        echo "<span class='span-resultat'>" . $Aero2['desiaero'] . "</span>";
        echo "<br>";
        echo "<span class='span-info'>Pilote : </span>";
        echo "<span class='span-resultat'>" . $Pilote1['prenom'] . "</span>";
        echo "<br>";
        echo "<span class='span-info'>Co-pilote : </span>";
        echo "<span class='span-resultat'>" . $Pilote2['prenom'] . "</span>";
        ?>
    </div>

</div>
<?php }
} ?>
