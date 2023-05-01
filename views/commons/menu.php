<nav class="navigation">

    <div class="main-navlinks">
        <button class="hamburger" type="button" aria-label="Toggle navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>

    <div class="nav-icon">
        <i class="fa-solid fa-list-check"></i>
        <h3>ToDoList
            <?php
            if (isset($_SESSION['profil']['login'])) {
                echo $_SESSION['profil']['login'];
            }

            ?>
        </h3>
    </div>


    <div class="navlinks-container">
        <a href="<?= URL ?>accueil">
            <p>Accueil</p>
        </a>
        <?php if (!estConnecte()) :  ?>

            <a href="<?= URL ?>login">
                <p>Se connecter</p>
            </a>
            <a href="<?= URL ?>creerCompte">
                <p>S'enregistrer</p>
            </a>

        <?php else : ?>

            <?php if (estAdministrateur()) :  ?>
                <a href="<?= URL ?>admin/gestion_droits">
                    <p>Gestion des droits</p>
                </a>

            <?php endif ?>
            <a href="<?= URL ?>compte/deconnexion">
                <p>Déconnexion</p>
            </a>

        <?php endif ?>
    </div>

    <div class="nav-auth">
        <?php if (estConnecte()) :  ?>
            <a href="<?= URL ?>compte/profil">
                <div class="profil_navbar">
                    <img src="<?= URL ?>/public/assets/images/<?= $utilisateur['image'] ?>" alt="" class="img_profil_navbar">
                    <p>Profil</p>
                </div>
            </a>
        <?php else : ?>
            <div class="profil_navbar">
                <a href="<?= URL ?>login"><i class="fa-solid fa-user"></i></a>
            </div>

        <?php endif ?>
    </div>

            <div class="nav-overlay"></div>



</nav>

