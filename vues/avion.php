<!-- Ici sera la page ou on affichera le formulaire pour insérer des avions dans la bdd -->
<h1 class="font-regular-blue">Formulaire / Avions</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class="FrontBlock">
    <!-- Coder en dessous -->
    <!-- L'icon -->
    <div class="IconCenter">
        <i class="fas fa-plane"></i>
    </div>

    <!-- Le formulaire -->
    <div class="Formulaire">

        <form action="#" method="POST">
            <div class="parent">
                <div>
                <label for="marque" class="font-regular-blue-16">Marque</label>
                <input type="text" name="marque" placeholder="Marque de l'avion">
                </div>

                <div>
                <label for="etat" class="font-regular-blue-16">État</label>
                <input type="text" name="etat" placeholder="État de l'avion">
                </div>
            </div>

            <div class="parent">
                <div>
                <label for="nbplaces" class="font-regular-blue-16">Nombre de places</label>
                <input type="int" name="nbplaces" placeholder="Nombre de places dans l'avion">
                </div>

                <div>
                <label for="typeavion" class="font-regular-blue-16">Type</label>
                <input type="text" name="typeavion" placeholder="Type de l'avion">
                </div>

                
            </div>

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
        !empty($_POST['marque']) && !empty($_POST['etat']) && !empty($_POST['nbplaces']) &&
        !empty($_POST['typeavion'])
    ) {

        Insertion(
            "avion",
            "marque",
            "etat",
            "nbplaces",
            "typeavion",
            "null",
            "null",
            "null",
            "null",
            $_POST['marque'],
            $_POST['etat'],
            $_POST['nbplaces'],
            $_POST['typeavion'],
            "null",
            "null",
            "null",
            "null",
            4
        );

    } else {
        echo "<p class='text-danger'>Il faut remplir tous les champs</p>";
    }
}
?>