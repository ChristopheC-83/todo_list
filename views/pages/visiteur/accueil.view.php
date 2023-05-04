<div class="animTitres listeContainer">

    <?php if (!estConnecte()) :  ?>
        <h2>Je m'enregistre si ce n'est pas déjà fait => logo enregistrement</h2>
        <h2>Je me connecte => logo connexion</h2>
        <h2>J'organise la liste des choses à faire ! => explosion smiley</h2>

    <?php else : ?>

        <form method="POST" class="menuDeroulantListe">
            <select name="liste_choisie" onchange=submit()>

                <?php $listes = array_unique(array_column($typeFromToDoList, 'type')); ?>
                <option value="">Toutes les listes</option>
                <?php foreach ($listes as $liste) : ?>
                    <option value="<?= $liste ?>" <?php if (!empty($_POST['liste_choisie']) && $_POST['liste_choisie'] === $liste) {
                                                        echo 'selected';
                                                    } ?>>
                        <?= $liste ?>
                    </option>
                <?php endforeach ?>


            </select>
        </form>

        <table>
            <tr>
                <th>Fait ?</th>
                <th>Liste</th>
                <th>Type</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <tr>
                <?php foreach ($listUser as $elementListe) : ?>
                    <?php if (!empty($_POST['liste_choisie'])) : ?>
                        <?php if ($elementListe['type'] === $_POST['liste_choisie']) : ?>
                            <?php require_once "./views/commons/liste_affichee.php" ?>
                        <?php endif ?>
                    <?php else : ?>
                        <?php require "./views/commons/liste_affichee.php" ?>
                        <!-- et pas require_once ! sinon, une seule ligne.... ben oui, on appelle une seule fois !-->
                    <?php endif ?>
            </tr>
        <?php endforeach ?>
        
    </table>
    
    <?php endif ?>
    <div class="overlayElementListeModale dnone"></div>

</div>



