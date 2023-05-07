<?php

require_once("./controllers/images.controller.php");
require_once("./controllers/security.controller.php");
require_once("./controllers/functionController.controller.php");
require_once("./models/administrateur/administrateur.model.php");
require_once("./models/administrateur/admin_todo_list.model.php");

function validation_adminCheckedElementListe($id, $fait, $login)
{   
    if (!adminBdCheckElementListe($id, $fait,$login)) {
        ajouterMessageAlerte("Echec de l'action", "rouge");
    }
    header('location:' . URL . "admin/visu_listes");
}
