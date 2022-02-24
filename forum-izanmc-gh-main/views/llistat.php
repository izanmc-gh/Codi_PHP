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
    <link rel="stylesheet" href="css/estil.css">
    <title>Document</title>
</head>
<body>

<div class="contingut">

    <?php
    echo "<h2> Llistat de posts </h2>";
    if ($_SESSION["author"] == $_SESSION["login"][2]) {
        foreach ($_SESSION["posts"] as $post) {
            echo "<div class='post'>";
            echo "<h2>" . $post["subject"] . "</h2>";
            echo "<h3>" . $post["body"] . "</h3>";
            echo "<h4>" . $post["author"] . "</h4>";
            echo "<h5>" . $post["date"] . "</h5>";
            echo "</div>";
        }
    }else{
        echo "<h1> Encara no tens cap post publicat </h1>";
    }
    ?>

</div>

</body>
</html>