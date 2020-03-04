<?php

session_start();
require "Controller/controller.php";
/*if (@$_GET['logout']) {
    session_destroy();
    header("location:index.php");
}*/

try {
    //pour passer d'une page a une autre
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            //page d'accueil
            case 'vue_accueil' :
                accueil();
                break;
            //page pour visualiser toutes les observations
            case 'vue_observation' :
                observation();
                break;
            //pour se login
            case 'vue_login' :
                login(@$_POST['login'], @$_POST['password']);
                break;
            //pour s'inscrire
            case 'vue_inscription' :
                inscription(@$_POST['prenomForm'], @$_POST['nomForm'], @$_POST['usernameForm'], @$_POST['emailForm'], @$_POST['confEmailForm'], @$_POST['passwordForm'], @$_POST['confPasswordForm']);
                break;
            default :
                throw new Exception("Action non valide");
        }
    } else
        //aller sur la page d'accueil
        accueil();
} catch (Exception $e) {
    erreur($e->getMessage());
}