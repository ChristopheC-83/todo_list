<?php


require_once("./controllers/functionController.controller.php");
require_once("./models/visiteur/visiteur.model.php");
require_once("./models/utilisateur/utilisateur.model.php");
require_once("./models/utilisateur/todo_list.model.php");
require_once("./controllers/functionController.controller.php");
require_once("./controllers/images.controller.php");

function validation_supprimerElementListe($id){
    if (bdSuppressionElementListe($id, $_SESSION['profil']['login'])){
        ajouterMessageAlerte("Elément supprimé de la liste", "vert");
    } else {
        ajouterMessageAlerte("Echec de la suppression", "rouge");
    }
    header('location:' . URL . "accueil");

}