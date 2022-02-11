<!-- Ici sera la page ou on affichera le tableau des pilotes de la bdd -->
<h1 class="font-regular-blue">Information / Pilote</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class="FrontBlock">
    <!-- Coder en dessous -->
    <div class="IconCenter">
        <i class="fas fa-user-tie"></i>
    </div>

    <div class="searchData">
        <form action="#" method="post">
            <input type="text" name="mot" placeholder="Rechercher">
            <input type="submit" name="btn-sea" value="search">
        </form>
    </div>
    <table class="tableau">
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Âge</th>
            <th>Grade</th>
            <th>Email</th>
            <th>Adresse</th>
            <?php
            if ($_SESSION['rolee'] == 'admin') {
                ?>
                <th>Opération</th>
            <?php } ?>
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
                echo "<a href='home.php?page=4&action=sup&idpilote=" . $unpilote['idpilote'] . "'>";
                echo "<button class='btn-danger btn' style='margin-right: 5px' name='btnDelete'>Supprimer</button>";
                echo "</a>";
                echo "<a href='home.php?page=4&action=edit&idpilote=" . $unpilote['idpilote'] . "'>";
                echo "<button class='btn-primary btn'>Modifier</button>";
                echo "</a>";
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <?php

    if (isset($_GET['action']) && isset($_GET['idpilote'])) {
        if ($_GET['action'] == 'sup') {
            Suppression("pilote", "idpilote", $_GET['idpilote']);
        } else if ($_GET['action'] == 'edit') {
            require_once('./Components/EditPilote.php');
        }

    }
    ?>
</div>