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
function adminBdModifierElementListe($id,$type, $a_faire, $login)
{
    $table = "TodoTable__" . $login;
    $req = "UPDATE $table set type = :type,  a_faire = :a_faire
            WHERE id = :id
            ";
    $stmt = getBDD()->prepare($req);
    $stmt->bindValue(":type", $type, PDO::PARAM_STR);
    $stmt->bindValue(":a_faire", $a_faire, PDO::PARAM_STR);
    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $ModifOK = ($stmt->rowCount() > 0);
    $stmt->closeCursor();
    return $ModifOK;
}

function adminBdSuppressionElementListe($id, $login)
{
    $table = "TodoTable__" . $login;
    $req = "DELETE  FROM $table 
            WHERE id = :id
            ";
    $stmt = getBDD()->prepare($req);
    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $suppressionOk = ($stmt->rowCount() > 0);
    $stmt->closeCursor();
    return $suppressionOk;
}