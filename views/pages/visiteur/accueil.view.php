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
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <tr>
                <?php foreach ($listUser as $elementListe) : ?>
                    <?php if (!empty($_POST['liste_choisie'])) : ?>
                        <?php if ($elementListe['type'] === $_POST['liste_choisie']) : ?>
                            <td>
                                <form action="compte/checkedElementListe" method="post">
                                    <input type="hidden" name="id" value=<?= $elementListe['id'] ?>>
                                    <input type="hidden" name="checkbox" value=<?= $elementListe['fait'] === 0 ? 1 : 0; ?>>
                                    <button type="submit">
                                        <?php if ($elementListe['fait'] === 0) : ?>
                                            <i class="fa-regular fa-square"></i>
                                        <?php else : ?>
                                            <i class="fa-regular fa-square-check"></i>
                                        <?php endif ?>
                                    </button>
                                </form>
                            </td>


                            <td class="<?php if ($elementListe['fait'] === 1) {
                                            echo "elementFait";
                                        } else {
                                            echo "elementAFaire";
                                        } ?>">
                                <p><?= $elementListe['à_faire'] ?></p>
                            </td>

                            <td>
                                <form action="compte/modifierElementListe" method="post">
                                    <input type="hidden" name="id">
                                    <button type="submit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                </form>
                            </td>


                            <td>
                                <form action="compte/supprimerElementListe" method="post">
                                    <input type="hidden" name="id" value=<?= $elementListe['id'] ?>>
                                    <button type="submit">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>


                        <?php endif ?>
                        <?php else :?>
                            <td>
                                <form action="compte/checkedElementListe" method="post">
                                    <input type="hidden" name="id" value=<?= $elementListe['id'] ?>>
                                    <input type="hidden" name="checkbox" value=<?= $elementListe['fait'] === 0 ? 1 : 0; ?>>
                                    <button type="submit">
                                        <?php if ($elementListe['fait'] === 0) : ?>
                                            <i class="fa-regular fa-square"></i>
                                        <?php else : ?>
                                            <i class="fa-regular fa-square-check"></i>
                                        <?php endif ?>
                                    </button>
                                </form>
                            </td>


                            <td class="<?php if ($elementListe['fait'] === 1) {
                                            echo "elementFait";
                                        } else {
                                            echo "elementAFaire";
                                        } ?>">
                                <p><?= $elementListe['à_faire'] ?></p>
                            </td>

                            <td>
                                <form action="compte/modifierElementListe" method="post">
                                    <input type="hidden" name="id">
                                    <button type="submit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                </form>
                            </td>


                            <td>
                                <form action="compte/supprimerElementListe" method="post">
                                    <input type="hidden" name="id" value=<?= $elementListe['id'] ?>>
                                    <button type="submit">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                    <?php endif ?>
            </tr>
        <?php endforeach ?>



        </table>





    <?php endif ?>

</div>