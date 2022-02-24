<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/views/css/estil.css">
    <title>Document</title>
</head>

<div class="top">
    <div class="topleft">
        <span class="titol">Formulari Cirvianum</span>
    </div>
    <div class="topright">

        <?php
        if ($_SESSION["login"][0] && $_SESSION["login"][1]) {
            echo "<a href='posts.php'>Posts</a>";
        }else if ($_SESSION["login"][1]) {
            echo "<a href='posts.php'>Posts</a>";
        }
        ?>

        <?php
        if ($_SESSION["login"][1]) {
            echo "<a href='nouPostForum.php'>Nou Post</a>";
        }
        ?>

        <?php
        if ($_SESSION["login"][0] && $_SESSION["login"][1]) {
            echo "<a href='regis.php'>Registre Usuari</a>";
        }
        ?>

        <?php
        if ($_SESSION["login"][2] == null) {
            echo "<a class='user' href ='login.php'>LogIn</a>";
        } else {
            echo "<a href ='pass.php'>Canviar contrasenya</a>";
        }
        ?>

        <?php
        if ($_SESSION["login"][2] == !null) {

            echo "<span class='user'>" . $_SESSION["login"][2] . "</span>";
        }
        ?>

        <?php
        if ($_SESSION["login"][1]) {
            echo "<a class='logOut' href ='login.php'>LogOut</a>";
        }
        ?>
        <span></span>
    </div>
</div>

<div class="foto">
    <img src="../views/img/ies.jpg" alt="cirvianum">
</div>

</html>