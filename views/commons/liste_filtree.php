
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
