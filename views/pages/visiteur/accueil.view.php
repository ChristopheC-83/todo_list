<div class="animTitres <?= $css ?>">
    
    <?php if (!estConnecte()) :  ?>
        <h2>Je m'enregistre si ce n'est pas déjà fait => logo enregistrement</h2>
        <h2>Je me connecte => logo connexion</h2>
        <h2>J'organise la liste des choses à faire ! => explosion smiley</h2>

    <?php else : ?>
        
        <table>
            <tr>
            <?php foreach ($typeFromToDoList as $type) : ?>
                <th><?php echo $type['type'] ?></th>
                <?php endforeach ?>


            </tr>



        </table>




    <?php endif ?>

</div>