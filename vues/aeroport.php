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
                    <input type="text" name="nomaeroport" placeholder="Nom de l'aéroport">
                </div>
                <div>
                    <label for="statutaeroport" class="font-regular-blue-16">Statut</label>
                    <input type="text" name="statutaeroport" placeholder="Statut de l'aéroport">
                </div>
            </div>
            <label for="adresseaeroport" class="font-regular-blue-16">Adresse</label>
            <input type="text" name="adresseaeroport" placeholder="Adresse de l'aéroport">

            <div class="btn-group">
                <input type="reset" name="btn-sub" value="Effacer">
                <input type="submit" name="btn-sub" value="Soumettre" class="btn-danger">
            </div>
        </form>
    </div>
</div>