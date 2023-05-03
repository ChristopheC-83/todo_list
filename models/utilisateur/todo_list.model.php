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


function bdSuppressionElementListe($id, $login)
{
    $table = "TodoTable__" . $login;
    $req = "DELETE  FROM $table 
            WHERE id = :id
            ";
    $stmt = getBDD()->prepare($req);
    // $stmt->bindValue(":login", $login, PDO::PARAM_STR);
    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $suppressionOk = ($stmt->rowCount() > 0);
    $stmt->closeCursor();
    return $suppressionOk;
}
