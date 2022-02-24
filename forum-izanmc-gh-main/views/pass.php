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
    <link rel="stylesheet" href="../views/css/estil.css">
    <title>Izan</title>
</head>
<body>

<div class="pass1">
    <div class="dissenyPass1">
        <form action="../controllers/changePass.php" method="post">
            <h2>Canviar contrasenya</h2><br>
            <label for="nom">Usuari actual:</label><br>
            <input type="text" id="nom" name="usernameAc"><br><br>
            <label for="pass1">Password actual:</label><br>
            <input type="password" id="pass1" name="passwordAc"><br><br>
            <label for="pass2">Password nova:</label><br>
            <input type="password" id="pass2" name="passwordNova"><br><br>
            <input type="submit" value="Canviar"><br><br>
        </form>
    </div>
</div>

<div class="pass2">
    <div class="dissenyPass2">
        <form action="../views/panel.php" method="post">
            <br>
            <input type="submit" value="Cancelar"><br>
        </form>
    </div>
</div>

</body>
</html>
