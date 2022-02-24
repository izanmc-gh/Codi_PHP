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

<br><br>
<div class="postPanel">
    <div class="dissenyPanel">
        <form action="../views/panel.php" method="post">
            <br>
            <input type="submit" value="Menú"><br><br>
        </form>
    </div>
</div>

<?php
echo "<h1> Llistat de posts </h1>";
foreach ($_SESSION["posts"] as $post) {
    echo "<div class='post'>";
    echo "<h2>" . $post["subject"] . "</h2>";
    echo "<h3>" . $post["body"] . "</h3>";
    echo "<h4>" . $post["author"] . "</h4>";
    echo "<h5>" . $post["date"] . "</h5>";
    echo "<form action='../controllers/deletePost.php' method='get'>";
    echo "<input type='submit' class='submit' value='Eliminar'>";
    echo "</form>";
    echo "</div>";
}
?>


</body>
</html>