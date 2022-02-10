<h1 class="font-regular-blue">Tableau de bord</h1>
<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class="FrontBlock">
    <!-- BLock Projet -->

    <div class="projetBlock">
        <div class="Projettitle">
            <h4 class="font-regular-blue">Notre projet de groupe</h4>
        </div>

        <div class="BlockIcon">
            <i class="fa-solid fa-users test"></i>
        </div>

        <div class="ProjetPara">
            <p class="font-regular-blue-16">
                Nous sommes un groupe de 3 élèves de BTS SIO et avons pour projet de vous présenter un site internet
                parmi plusieurs thèmes proposés. Nous avons choisi la gestion des vols d'Air France, avec le détail des
                avions, pilotes et aéroports.
            </p>

            <p class="font-regular-blue-16">
                Le cahier des charges nous imposait les contraintes suivantes : <br>
                - Possibilité de connexion / déconnexion avec des rôles <br>
                - Ajout d'actions usuelles sur les tables (ajouter, modifier, supprimer, lister) <br>
                - Afficher une barre de menu ainsi qu'un pied de page
            </p>

            <p class="font-regular-blue-16">
                Nous sommes heureux de vous présenter notre site et espérons qu'il ai atteint nos objectifs.
            </p>
        </div>
    </div>

    <!-- BLock Entrées -->
    <div class="projetBlock">
        <div class="Projettitle">
            <h4 class="font-regular-blue">Entrées</h4>
        </div>
        <?php
        $LesVol = CountAll("vol");
        $LesAvions = CountAll("avion");
        $LesPilotes = CountAll("pilote");
        $LesAero = CountAll("aeroport");
        ?>
        <table class="homeTab">
            <tr>
                <th class="font-regular-blue-16">Vols</th>
                <th class="font-regular-blue-16">Avions</th>
                <th class="font-regular-blue-16">Pilotes</th>
                <th class="font-regular-blue-16">Aéroport</th>
            </tr>
            <tr>
                <?php
                echo "<td>$LesVol</td>";
                echo "<td>$LesAvions</td>";
                echo "<td>$LesPilotes</td>";
                echo "<td>$LesAero</td>";
                ?>
            </tr>
        </table>
    </div>

    <!-- Footer-->
    <div class="footer">
        <footer class="footerText">
            <div>
                <p>© Tom LAU, Salim ALARCON, Clara GARCIA</p>
            </div>
            <div class="footerIconBlock">
                <i class="fa-brands fa-facebook footericon" href="https://www.facebook.com/cfainsta"></i>
                <i class="fa-brands fa-instagram footericon" href="https://www.instagram.com/cfa_insta/"></i>
                <i class="fa-brands fa-twitter footericon" href="https://twitter.com/CFAINSTA"></i>
                <i class="fa-brands fa-linkedin footericon" href="https://www.linkedin.com/school/cfa-insta"></i>
            </div>
        </footer>
    </div>

</div>