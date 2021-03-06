<div class="RightBar">
    <h4 class="font-regular-white">Accueil</h4>
    <div class="block">
        <div>
            <div class="sous-block">
                <i class="fas fa-tachometer-alt iconSpacing"></i>
                <a href="Home.php?page=0" style="position: relative; left: -2px">Tableau de bord</a>
            </div>
            <div class="sous-block">
                <i class="fas fa-tasks iconSpacing"></i>
                <a href="Home.php?page=1">Tâches</a>
            </div>
        </div>
    </div>
    <?php
    if ($_SESSION['rolee'] == 'admin'){
    ?>
    <h4 class="font-regular-white">Formulaire</h4>
    <div class="block">
        <div>
            <div class="sous-block">
                <i class="fas fa-plane-departure iconSpacing"></i>
                <a href="Home.php?page=6">Vols</a>
            </div>
            <div class="sous-block">
                <i class="fas fa-plane iconSpacing"></i>
                <a href="Home.php?page=7" style="position: relative; left: 2px">Avions</a>
            </div>
            <div class="sous-block">
                <i class="fas fa-user-tie iconSpacing"></i>
                <a href="Home.php?page=8" style="position: relative; left: 7px">Pilotes</a>
            </div>
            <div class="sous-block">
                <i class="fas fa-map-marker-alt iconSpacing"></i>
                <a href="Home.php?page=9" style="position: relative; left: 8px">Aéroport</a>
            </div>
        </div>
    </div>
    <?php }?>
    <h4 class="font-regular-white">Informations</h4>
    <div class="block">
        <div>
            <div class="sous-block">
                <i class="fas fa-plane-departure iconSpacing"></i>
                <a href="Home.php?page=2">Vols</a>
            </div>
            <div class="sous-block">
                <i class="fas fa-plane iconSpacing"></i>
                <a href="Home.php?page=3" style="position: relative; left: 2px">Avions</a>
            </div>
            <div class="sous-block">
                <i class="fas fa-user-tie iconSpacing"></i>
                <a href="Home.php?page=4" style="position: relative; left: 7px">Pilotes</a>
            </div>
            <div class="sous-block">
                <i class="fas fa-map-marker-alt iconSpacing"></i>
                <a href="Home.php?page=5" style="position: relative; left: 8px">Aéroport</a>
            </div>
        </div>
    </div>
    <div class="disconnect">
        <i class="fa-solid fa-door-open"></i>
        <a href="Deconnexion.php">Déconnexion</a>
    </div>
</div>