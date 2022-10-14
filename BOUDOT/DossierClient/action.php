<?php

session_start();


if (isset($_POST['add'])) {
    if (isset($_POST['identifiant'], $_POST['mot_de_passe']) && !empty($_POST['identifiant']) && !empty($_POST['mot_de_passe'])) {

        $identifiant = (string) strip_tags($_POST['identifiant']);
        $mot_de_passe = (string) strip_tags($_POST['mot_de_passe']);

        $_SESSION['user']['id'] = $identifiant;
        $_SESSION['user']['mdp'] = $mot_de_passe;

        header("Location: client_1/client_1.php");
        exit;
    }
}

header("Location: ../index.php");
exit;
