<?php
include "functions/functions.php";
session_start();

$nom = $_POST['usernameAc'];
$pass1 = $_POST['passwordAc'];
$pass2 = $_POST['passwordNova'];

unset($_SESSION["login"][1]);

$usuariNou = array(
    "user" => $nom,
    "pass" => $pass2
);

array_push($_SESSION["users"],$usuariNou);

header('Location: ../views/login.php');

?>