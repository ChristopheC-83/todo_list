<?php

require_once("./controllers/images.controller.php");
require_once("./controllers/security.controller.php");
require_once("./controllers/functionController.controller.php");
require_once("./models/administrateur/administrateur.model.php");


function droits()
{
    $utilisateurs = getAllUsersInformation();
    $datas = getUserInformation($_SESSION['profil']['login']);

    $data_page = [
        "page_description" => "Gestion des droits des utilisateurs",
        "page_title" => "Gestion Droits",
        "view" => "views/pages/administrateur/gestion_droits.view.php",
        "template" => "views/commons/template.php",
        "js" => ["admin.js"],
        "utilisateurs" => $utilisateurs,
        "utilisateur" => $datas,

    ];
    genererPage($data_page);
}

function validation_modificationRole($login, $role)
{
    if (bdModificationRoleUser($login, $role)) {
        ajouterMessageAlerte($login . " est désormais " . $role . ".", "vert");
    } else {
        ajouterMessageAlerte("La modification a échoué.", "rouge");
    }
    header('location:' . URL . "admin/gestion_droits");
}
function validation_modificationValidation($login, $est_valide)
{
    if (bdModificationValidationUser($login, $est_valide)) {
        ajouterMessageAlerte("Le compte de " . $login . " est désormais validé.", "vert");
    } else {
        ajouterMessageAlerte("La validation a échoué.", "rouge");
    }
    header('location:' . URL . "admin/gestion_droits");
}

function adminSuppressionCompte($login)
{

    suppressionImageUtilisateur($login);
    rmdir("public/assets/images/profils/" . $login);

    if (bdSuppCompte($login)) {
        ajouterMessageAlerte("Suppression du compte effectuée.", "vert");
        header('location:' . URL . "admin/gestion_droits");
    } else {
        ajouterMessageAlerte("La suppression du compte a échoué.<br>Contacter l'administrateur.", "rouge");
        header('location:' . URL . "admin/gestion_droits");
    }
}

function adminVisuListes()
{

    $datas = getUserInformation($_SESSION['profil']['login']);
    $typeFromToDoList = getTypeFromToDoList($_SESSION['profil']['login']);
    $liste_utilisateurs = getAllUsersInformation();


    $data_page = [
        "page_description" => "Description accueil",
        "page_title" => "Visu Listes",
        "view" => "views/pages/administrateur/adminVisuListes.view.php",
        "template" => "views/commons/template.php",
        "utilisateur" => $datas,
        "typeFromToDoList" => $typeFromToDoList,
        "liste_utilisateurs" =>$liste_utilisateurs,
        "js" => ["profil.js", "todo.js"]

    ];
    genererPage($data_page);
}
