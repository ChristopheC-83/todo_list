<td>
    <?=$utilisateur['login']?>

</td>

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
    <p><?= $elementListe['a_faire'] ?></p>
</td>

<td>
    <p><?= $elementListe['type'] ?></p>
</td>



<td class="boutonModifElement ">

    <input type="hidden" name="id" value=<?= $elementListe['id'] ?>>
    <button type="submit">
        <i class="fa-solid fa-pen"></i>
    </button>

    <div class="modifElementListeModale dnone">
        <h3>Modifications d'un élément</h3>
        <form action="compte/modifierElementListe" method="post" class="entryForm">
            <input type="hidden" name="id" value=<?= $elementListe['id'] ?>>
            <label>Type</label>
            <textarea type="text" name="type" autocomplete="on"><?= $elementListe['type'] ?></textarea>
            <label>Elément</label>
            <textarea type="text" name="a_faire"><?= $elementListe['a_faire'] ?></textarea>
            <button type="submit">Valider modification(s)</button>
        </form>
    </div>

</td>



<td>
    <form action="compte/supprimerElementListe" method="post">
        <input type="hidden" name="id" value=<?= $elementListe['id'] ?>>
        <button type="submit">
            <i class="fa-solid fa-trash"></i>
        </button>
    </form>
</td>

