<?php


require_once("./models/pdo.model.php");


function adminBdCheckElementListe($id, $fait, $login)
{
    $table = "TodoTable__" . $login;
    $req = "UPDATE $table SET fait = :fait
            WHERE id = :id 
            ";
    $stmt = getBDD()->prepare($req);
    $stmt->bindValue(":fait", $fait, PDO::PARAM_INT);
    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $ModifOK = ($stmt->rowCount() > 0);
    $stmt->closeCursor();
    return $ModifOK;
}
