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


<div class="regis">
    <div class="dissenyRegis">
        <form action="../controllers/createUser.php" method="post">
            <h2>Registrar usuari</h2><br>
            <label for="fname">Username:</label><br>
            <input type="text" id="fname" name="usernameRegis" value=""><br><br>
            <label for="lname">Password:</label><br>
            <input type="password" id="lname" name="passwordRegis" value=""><br><br>
            <input type="submit" value="Registrar-se"><br><br>
        </form>
    </div>
</div>

<div class="regis2">
    <div class="dissenyRegis2">
        <form action="../views/panel.php" method="post">
            <input type="submit" value="Cancelar"><br>
        </form>
    </div>
</div>

</body>
</html>
