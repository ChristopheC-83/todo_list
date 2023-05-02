<div class="animTitres listeContainer">

    <?php if (!estConnecte()) :  ?>
        <h2>Je m'enregistre si ce n'est pas déjà fait => logo enregistrement</h2>
        <h2>Je me connecte => logo connexion</h2>
        <h2>J'organise la liste des choses à faire ! => explosion smiley</h2>

    <?php else : ?>

        <form method="POST" class = "menuDeroulantListe">
            <select name="liste_choisie" onchange=submit()>

                <?php $listes = array_unique(array_column($typeFromToDoList, 'type')); ?>
                <option value="">Toutes les listes</option>
                <?php foreach ($listes as $liste) : ?>
                    <option value="<?= $liste ?>" <?php if (!empty($_POST['liste_choisie']) && $_POST['liste_choisie'] == $liste) {
                                                        echo 'selected';
                                                    } ?>><?= $liste ?></option>
                <?php endforeach ?>

            </select>
        </form>

        <table>
            <tr>
                <th>Fait ?</th>
                <th>Liste</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <tr>
                <?php foreach($listUser as $elementListe) :?>
                <td>
                    <form action="checkedElementListe" method="post">
                        <input type="checkbox" name="" id="" 
                        <?php if($elementListe['fait'] === 1) {echo 'checked';} ?>
                        >
                    </form>
                </td>
                <td>
                    <?=$elementListe['à_faire']?>
                </td>
                <td>
                    <form action="supprimerElementListe" method="post">
                        <input type="hidden" name="">
                        <i class="fa-solid fa-trash"></i>
                    </form>
                </td>
                <td>
                    <form action="modifierElementListe" method="post">
                        <input type="hidden" name="">
                        <i class="fa-solid fa-pen"></i>
                    </form>
                </td>



            </tr>
            <?php endforeach ?>



        </table>
        <?php
        afficherTableau($listUser)
        ?>




    <?php endif ?>

</div>