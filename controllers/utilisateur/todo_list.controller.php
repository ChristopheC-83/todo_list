<?php


require_once("./controllers/functionController.controller.php");
require_once("./models/visiteur/visiteur.model.php");
require_once("./models/utilisateur/utilisateur.model.php");
require_once("./models/utilisateur/todo_list.model.php");
require_once("./controllers/functionController.controller.php");
require_once("./controllers/images.controller.php");

function validation_supprimerElementListe($id)
{
    if (!bdSuppressionElementListe($id, $_SESSION['profil']['login'])) {
        ajouterMessageAlerte("Echec de la suppression", "rouge");
    }
    header('location:' . URL . "accueil");
}
function validation_supprimerCoche()
{
    if (!bdSuppressionElementCoche($_SESSION['profil']['login'])) {
        ajouterMessageAlerte("Echec de la suppression de éléments cochés !", "rouge");
    }
    header('location:' . URL . "accueil");
}

function validation_checkedElementListe($id, $fait)
{
    if (!bdCheckElementListe($id, $fait, $_SESSION['profil']['login'])) {
        ajouterMessageAlerte("Echec de l'action", "rouge");
    }
    header('location:' . URL . "accueil");
}
function validation_modifierElementListe($id, $type, $a_faire)
{
    if (!bdModifierElementListe($id, $type, $a_faire, $_SESSION['profil']['login'])) {
        ajouterMessageAlerte("Echec de l'action", "rouge");
    }
    header('location:' . URL . "accueil");
}
function validation_ajouterElementListe($type, $a_faire)
{

    $fait = 0;
    if (!bdAjouterElementListe($a_faire, $fait, $type, $_SESSION['profil']['login'])) {
        ajouterMessageAlerte("Echec de l'ajout", "rouge");
    }
    header('location:' . URL . "accueil");
}
