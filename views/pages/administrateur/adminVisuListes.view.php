<div class="animTitres visuListes">

    <!-- <?=afficherTableau($liste_utilisateurs)?>
    <?=afficherTableau($listUser)?> -->

    <div class="adminListeContainer">
        <table>
            <tr>
            <tr>
                <th>Utilisateur</th>
                <th>Fait ?</th>
                <th>Eléments</th>
                <th>Type</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <tr>

                <?php
                foreach ($liste_utilisateurs as $utilisateur) : ?>
                    <?php foreach ($listUser as $elementListe) : ?>
                        <?php if (!empty($_POST['liste_choisie'])) : ?>
                            <?php if ($elementListe['type'] === $_POST['liste_choisie']) : ?>
                                <?php require "./views/commons/liste_affichee_admin.php" ?>
                            <?php endif ?>
                        <?php else : ?>
                            <?php require "./views/commons/liste_affichee_admin.php" ?>
                            <!-- et pas require_once ! sinon, une seule ligne.... ben oui, on appelle une seule fois !-->
                        <?php endif ?>
            </tr>
        <?php endforeach ?>
    <?php endforeach ?>

        </table>


    </div>


































</div>