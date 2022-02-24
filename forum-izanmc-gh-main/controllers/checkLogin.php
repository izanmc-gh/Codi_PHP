<?php
include "functions/functions.php";
session_start();

$user = $_POST['username'] ?? null;
$pass = $_POST['pass'] ?? null;

$_SESSION["user_logged"] = null;

if (isset($user) && isset($pass) && isset($_SESSION["users"])){
    if ($user === $_SESSION["users"][0]["user"] && $pass === $_SESSION["users"][0]["pass"]){
        //ADMIN
        //echo "ADMIN";
        $_SESSION["login"] = array(true,true,"Admin");
    }elseif (checkCredUser($user,$pass)!=null){
        //USER
        //echo "REGULAR USER";
        $_SESSION["login"] = array(false,true,$user);
    }else {
        //INVALID CREDENTIALS
        //echo "INVALID CRED";
        $_SESSION["login"] = array(false,false,null);
    }

    header('Location: ../views/panel.php');
}
?>
