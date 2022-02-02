<!-- Ici sera la page ou on affichera le formulaire pour insérer des pilotes dans la bdd -->
<h1 class="font-regular-blue">Formulaire / Pilotes</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class="FrontBlock">
    <!-- Coder en dessous -->

    <!-- L'icon -->
    <div class="IconCenter">
        <i class="fas fa-user-tie"></i>
    </div>

    <!-- Le formulaire -->
    <div class="Formulaire">
        <form action="#" method="POST">
            <div class="parent">
                <div>
                    <label for="prenompilote" class="font-regular-blue-16">Prénom</label>
                    <input type="text" name="prenompilote" placeholder="Prénom du pilote">
                </div>
                <div>
                    <label for="nompilote" class="font-regular-blue-16">Nom</label>
                    <input type="text" name="nompilote" placeholder="Nom du pilote">
                </div>
            </div>
            <div class="parent">
                <div>
                    <label for="agepilote" class="font-regular-blue-16">Âge</label>
                    <input type="text" name="agepilote" placeholder="Âge du pilote">
                </div>
                <div>
                    <label for="gradepilote" class="font-regular-blue-16">Grade</label>
                    <input type="text" name="gradepilote" placeholder="Grade du pilote">
                </div>
            </div>

            <label for="emailpilote" class="font-regular-blue-16">Email</label>
            <input type="text" name="emailpilote" placeholder="Email du pilote">

            <label for="adressepilote" class="font-regular-blue-16">Adresse</label>
            <input type="text" name="adressepilote" placeholder="Adresse du pilote">

            <div class="btn-group">
                <input type="reset" name="btn-sub" value="Effacer">
                <input type="submit" name="btn-sub" value="Soumettre" class="btn-danger">
            </div>
        </form>
    </div>
</div>