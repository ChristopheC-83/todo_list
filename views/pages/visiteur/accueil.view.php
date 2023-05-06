<div class="animTitres listeContainer">

    <?php if (!estConnecte()) :  ?>
        <h2>Je m'enregistre si ce n'est pas déjà fait => logo enregistrement</h2>
        <h2>Je me connecte => logo connexion</h2>
        <h2>J'organise la liste des choses à faire ! => explosion smiley</h2>

    <?php else : ?>

        <div class="iconeAjouterElementListe"><i class="fa-solid fa-circle-plus"></i></div>
        <div class="overlayAjouterElementListeModale dnone">
        <i class="fa-regular fa-circle-xmark fermerModale"></i></div>

        <div class="ajouterElementListe dnone" id="ajouterElementListe">
            <h3>Ajouter un élément dans votre ToDoList</h3>
            <form action="compte/ajouterElementListe" method="post" class="entryForm">
                <label>Type</label>
                <input type="text" name="type"></input>
                <label>Elément</label>
                <input type="text" name="a_faire"></input>
                <button type="submit">Valider L'ajout</button>
            </form>
        </div>

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
                <th>Eléments</th>
                <th>Type</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <tr>
                <?php foreach ($listUser as $elementListe) : ?>
                    <?php if (!empty($_POST['liste_choisie'])) : ?>
                        <?php if ($elementListe['type'] === $_POST['liste_choisie']) : ?>
                            <?php require "./views/commons/liste_affichee.php" ?>
                        <?php endif ?>
                    <?php else : ?>
                        <?php require "./views/commons/liste_affichee.php" ?>
                        <!-- et pas require_once ! sinon, une seule ligne.... ben oui, on appelle une seule fois !-->
                    <?php endif ?>
            </tr>
        <?php endforeach ?>

        </table>
        
        <div class="annulerElementsFaits"><a href="compte/supprimerCoche"><i class="fa-solid fa-circle-xmark"></i></a></div>
    <?php endif ?>
    <div class="overlayElementListeModale dnone">
        <i class="fa-regular fa-circle-xmark fermerModale"></i>
    </div>

</div>