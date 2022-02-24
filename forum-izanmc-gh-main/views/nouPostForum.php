<?php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../views/css/estil.css">
    <title>Nou Post</title>
</head>
<body>

<div class="post1">
    <div class="disseny1">
        <form action="../controllers/createPost.php" method="post">
            <h2>Crear Post</h2><br>
            <label for="subject">Subject:</label><br>
            <input type="text" id="subject" name="subject"><br><br>
            <label for="body">Body:</label><br>
            <input type="text" id="body" name="body"><br><br>
            <input type="submit" value="Crear post"><br><br>
        </form>
    </div>
</div>

<div class="post2">
    <div class="disseny2">
        <form action="../views/panel.php" method="post">
            <input type="submit" value="Cancelar"><br>
        </form>
    </div>
</div>

</body>
</html>
