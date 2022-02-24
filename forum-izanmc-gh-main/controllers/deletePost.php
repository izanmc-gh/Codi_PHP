<?php
session_start();

foreach ($_SESSION['posts'] as $key => $value){
    if ($_SESSION["login"][0] == $_SESSION["posts"]){
        unset($_SESSION['posts'][$key]);
        break;
    }
}

header('Location: ../views/panel.php');
?>