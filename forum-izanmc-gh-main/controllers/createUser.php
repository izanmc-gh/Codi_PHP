<?php
session_start();

$user = $_POST['usernameRegis'];
$pass = $_POST['passwordRegis'];

$user = array(
    "user" => $user,
    "pass" => $pass
);

array_push($_SESSION["users"],$user); //add

header('Location: ../views/login.php');

?>
