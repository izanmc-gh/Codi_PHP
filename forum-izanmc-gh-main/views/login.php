<?php
session_start();

//unset($_SESSION["users"]);
//unset($_SESSION["posts"]);

if (!isset($_SESSION["users"]) || !isset($_SESSION["posts"])) {

    $_SESSION["users"] = array( //array bidimensional
        array(
            "user" => "admin",
            "pass" => "1234"
        ),

        array(
            "user" => "izan",
            "pass" => "123"
        )
    );

    $_SESSION["posts"] = array(
        array(
            "subject" => "Subject Test",
            "body" => "Body Test",
            "author" => "admin",
            "date" => date("F j, Y, g:i a")
        )
    );
}
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

<div class="login">
    <div class="disseny">
        <form action="../controllers/checkLogin.php" method="post">
            <h2>Login</h2><br>
            <label for="name">Username:</label><br>
            <input type="text" id="name" name="username"><br><br>
            <label for="pass">Password:</label><br>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="submit" value="LogIn"><br><br>
        </form>
    </div>
</div>

</body>
</html>
