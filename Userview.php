<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Include\CSS\Main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Over de Rhein - Gebruiker</title>
</head>
<body>
    <?php
    $ID = 1;
    require 'Include\PHP\navbar.php';
    require 'Include\PHP\conn.php';

    $id = mysqli_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM `users` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="center">
            <div class="center">
            <form action="Include/PHP/update-users-db.php?id=<?php echo $id ?>" method="post">
                <input class="login-form" type="text" name="username" placeholder="Login-naam" value="<?php echo $row['username'] ?>" >
                <br>
                <input class="login-form" type="text" name="mail" placeholder="email" value="<?php echo $row['email'] ?>" >
                <br>
                <input class="login-form" type="password" name="pwd" placeholder="Wachtwoord">
                <br>
                <input class="login-form" type="password" name="pwdrepeat" placeholder="Bevestig Wachtwoord">
                <br>
                <button class="login-form" type="submit" name="update-submit" >Aanpassen</button>
            </div>  
    </div>
    
      <?php  }
    } ?>

    
</body>
</html>