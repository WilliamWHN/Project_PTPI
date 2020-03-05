<?php

function getDB()
{
    $connexion = new PDO('mysql:host=localhost; dbname=mydb', 'root', '');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connexion;
}

function checkpass($login, $password)
{
    $connexion = getDB();

    $requetelog = "SELECT Password,Admin FROM users where Username = ?";

    $prepare = $connexion->prepare($requetelog);
    $prepare->execute(array($login));
    $resultatslog= $prepare->fetchAll();


    foreach ($resultatslog as $loguser) {
        if (password_verify($password, $loguser['Password'])) {
            if ($loguser['Admin'] == 1) {
                $_SESSION['Admin'] = true;
            }
            return true;
        } else {
            return false;
        }
    }
}

function EncryptPassword($password)
{
    $EncryptedPassword = password_hash($password, PASSWORD_DEFAULT);
    return $EncryptedPassword;
}

?>