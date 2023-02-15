<?php

    session_start();

$userData = [ 
    "Jurrie" => "CleoIsEenPoes",
    "Edwin" => "DinoIsEenPoes",
    "Coach" => "GeefJurrieEenTien"
];

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (empty($_POST['username'])) {
        $_SESSION["error"] = "You are not part of the Borg Collective";
        header('Location: index.php', true, 303);           
    } else {
        if (isset($userData[$_POST['username']])) {
            if ($userData[$_POST['username']] == $_POST['password']) {
                $_SESSION['tarotLogin'] = true;
                unset($_SESSION['error']);
                header('Location: index.php', true, 303);
            } else {
                $_SESSION["error"] = "Drone {$_POST['username']} of Nine, insert correct password now!";
                header('Location: index.php', true, 303);
            }
        } else {
            $_SESSION["error"] = "{$_POST['username']} is not part of the Borg Collective";
            header('Location: index.php', true, 303);
        }
    }
}


?>
