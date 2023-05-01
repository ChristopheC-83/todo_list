<?php


require_once("./models/pdo.model.php");


function getToDoListUser($login)

{
    $table = "TodoTable__" . $login;
    $req = "SELECT * FROM $table";
    $stmt = getBDD()->prepare($req);
    $stmt->execute();
    $liste = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $liste;
}

function getTypeFromToDoList($login)

{
    $table = "TodoTable__" . $login;
    $req = "SELECT DISTINCT type FROM $table";
    $stmt = getBDD()->prepare($req);
    $stmt->execute();
    $liste = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $liste;
}


