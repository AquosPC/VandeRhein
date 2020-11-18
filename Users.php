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

   
    if (isset($_SESSION['id'])) {
        $username = $_SESSION['username'];

        echo '<br><h2 class="page-text center">Wat wilt u aanpassen ' . $username . '?</h2>';

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
                        <td class="table-divider">aanpassen</td>
                        <td class="table-divider">Verwijderen</td>
                    </tr>
            <?php

            if ($resultcheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><a href="Userview.php?id=<?php echo $row['id'] ?>"><button class="button-center">X</button></a></td>
                        <td><a href="Userview.php?id=<?php echo $row['id'] ?>"><button class="button-center">X</button></a></td>
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