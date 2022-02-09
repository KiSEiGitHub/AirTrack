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
                    <input type="text" name="prenompilote" placeholder="Prénom du pilote" id="prenompilote">
                </div>
                <div>
                    <label for="nompilote" class="font-regular-blue-16">Nom</label>
                    <input type="text" name="nompilote" placeholder="Nom du pilote" id="nompilote">
                </div>
            </div>
            <div class="parent">
                <div>
                    <label for="agepilote" class="font-regular-blue-16">Âge</label>
                    <input type="text" name="agepilote" placeholder="Âge du pilote" id="agepilote">
                </div>
                <div>
                    <label for="gradepilote" class="font-regular-blue-16">Grade</label>
                    <input type="text" name="gradepilote" placeholder="Grade du pilote" id="gradepilote">
                </div>
            </div>

            <label for="emailpilote" class="font-regular-blue-16">Email</label>
            <input type="text" name="emailpilote" placeholder="Email du pilote" id="emailpilote">

            <label for="adressepilote" class="font-regular-blue-16">Adresse</label>
            <input type="text" name="adressepilote" placeholder="Adresse du pilote" id="adressepilote">

            <div class="btn-group">
                <input type="reset" name="btn-sub" value="Effacer">
                <input type="submit" name="btn-sub" value="Soumettre" class="btn-danger">
            </div>
        </form>
    </div>
</div>
<!-- Fonction qui insert les pilotes -->
<?php
if (isset($_POST['btn-sub'])) {
    if(
    !empty($_POST['prenompilote']) && !empty($_POST['nompilote']) && !empty($_POST['agepilote'])
    && !empty($_POST['gradepilote']) && !empty($_POST['emailpilote']) && !empty($_POST['adressepilote'])
    ) {
        Insertion(
            "pilote",
            "nom",
            "prenom",
            "age",
            "email",
            "adresse",
            "grade",
            "null",
            "null",
            $_POST['nompilote'],
            $_POST['prenompilote'],
            $_POST['agepilote'],
            $_POST['emailpilote'],
            $_POST['adressepilote'],
            $_POST['gradepilote'],
            "null",
            "null",
            6
        );
    } else {
        echo "<p class='text-danger'>Il faut remplir tous les champs</p>";
    }
}
?>












        






    }
    
}