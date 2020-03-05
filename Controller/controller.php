<?php

require "modele/modele.php";

// Affichage de la page de l'accueil
function accueil()
{
    require "vue/vue_accueil.php";
}

//quand on se login
function login($login, $password)
{
    if (!($login == "") && !($password == "")) {
        $resultat = checkPass($login, $password);
        if ($resultat) {
            $_SESSION['login'] = $login;
            require "vue/vue_success.php";
        } else {
            $erreurmdp = 1;
            require 'vue/vue_login.php';
        }
    } else {
        $erreurmdp = 0;
        require 'vue/vue_login.php';
    }

}

?>