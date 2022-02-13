<!-- Ici sera la page ou on affichera le formulaire pour insérer des aéroport dans la bdd -->
<h1 class="font-regular-blue">Formulaire / Aéroport</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class="FrontBlock">

    <div class="IconCenter">
        <i class="fas fa-map-marker-alt"></i>
    </div>

    <!-- Coder en dessous -->
    <div class="Formulaire">
        <form action="#" method="POST">
            <div class="parent">
                <div>
                    <label for="nomaeroport" class="font-regular-blue-16">Nom</label>
                    <input type="text" name="nomaeroport" placeholder="Nom de l'aéroport" id="nomaeroport">
                </div>
                <div>
                    <label for="statutaeroport" class="font-regular-blue-16">Statut</label>
                    <input type="text" name="statutaeroport" placeholder="Statut de l'aéroport" id="statutaeroport">
                </div>
            </div>
            <label for="adresseaeroport" class="font-regular-blue-16">Adresse</label>
            <input type="text" name="adresseaeroport" placeholder="Adresse de l'aéroport" id="adresseaeroport">

            <div class="btn-group">
                <input type="reset" name="btn-sub" value="Effacer">
                <input type="submit" name="btn-sub" value="Soumettre" class="btn-danger">
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['btn-sub'])) {
    if (
        !empty($_POST['nomaeroport']) && !empty($_POST['statutaeroport']) && !empty($_POST['adresseaeroport'])
    ) {

        Insertion(
            "aeroport",
            "desiaero",
            "adresse",
            "statut",
            "null",
            "null",
            "null",
            "null",
            "null",
            $_POST["nomaeroport"],
            $_POST["adresseaeroport"],
            $_POST["statutaeroport"],
            "null",
            "null",
            "null",
            "null",
            "null",
            3
                );

    } else {
        echo "<p class='text-danger'>Il faut remplir tous les champs</p>";
    }
}
?>