<?php $unPilote = selectWhere("pilote", "idpilote", $_GET['idpilote']); ?>

<div class="Formulaire">
        <form action="#" method="POST">
            <div class="parent">
                <div>
                    <label for="prenompilote" class="font-regular-blue-16">Prénom</label>
                    <input type="text" name="prenompilote" placeholder="Prénom du pilote" id=<?php echo $unPilote['prenompilote'] ?>
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