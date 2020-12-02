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

   
    if (isset($_SESSION['id'])) { ?>

        <div class="center">
        <a href="Register"><button class="center login-form">Gebruiker toevoegen</button></a>
        </div> <?php

        $sql = "SELECT * FROM users;";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result); ?>
        <div class="center div-page">
            <table class="white-text center">
                <tbody>
                    <tr class="table-row">
                        <td>ID</td>
                        <td>Inlognaam</td>
                        <td>E-Mail</td>
                        <td class="table-divider">Admin</td>
                        <td class="table-divider">Verwijderen</td>
                    </tr>
            <?php

            if ($resultcheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php if ($row['accountrank'] == 1) {
                            echo('Ja');
                        } else {
                            echo('Nee');
                        }?></td>
                        <td><a href="Delete-user.php?id=<?php echo $row['id'] ?>"><button class="button-center">X</button></a></td>
                    </tr>
            
                <?php }
        } ?>
                </tbody>
            </table>
        </div>
    <?php }
    else {
        echo '<br><h2 class="page-text center">U moet eerst inloggen.</h2>';
    }
?>
    
</body>
</html>