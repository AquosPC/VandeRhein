<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Include\CSS\Main.css">
    <title>Over de Rhein - Login</title>
</head>
<body>
    <?php
    $ID = 2;
    require 'Include\PHP\navbar.php';
    ?>
    <div class="center">
        <div class="center">
        <form action="login-db.php" method="post">
            <input class="login-form" type="text" name="username" id="username" placeholder="Login-naam">
            <br>
            <input class="login-form" type="text" name="Password" id="Password" placeholder="Wachtwoord">
            <br>
            <input class="login-form" type="submit" value="Log in">
        </div>  
    </div>

</body>
</html>