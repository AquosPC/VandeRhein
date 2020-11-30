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
            <a href="Users"><button class="login-form" >Terug</button></a>
            <form action="Include/PHP/delete-users-db.php?id=<?php echo $id ?>" method="post">
                <p class="page-text">Weet u het zeker?</p>
                <button class="delete-button" type="submit" name="delete-submit" >Verwijderen</button>
            </div>  
    </div>
    
      <?php  }
    } ?>

    
</body>
</html>