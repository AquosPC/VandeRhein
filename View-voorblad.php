<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Include\CSS\Main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Over de Rhein - Voorbladen</title>
</head>
<body>
    <?php
    $ID = 3;
    require 'Include\PHP\navbar.php';
    require 'Include\PHP\conn.php';

    /* $sql = "SELECT * FROM users WHERE id='"$_SESSION['id']"';";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['username'];
        }
    } */
    if (isset($_SESSION['id'])) { ?>
        <div class="center">
            <a href="voorbladhijskranentest-aanmaken"><button class="center login-form">Hijskraantest Toevoegen</button></a>
            <a href="voorbladkabelchecklist-aanmaken"><button class="center login-form">Kabelchecklist Toevoegen</button></a>
        </div>
        
        </div> <?php

            $sql = "SELECT * FROM voorbladen;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result); ?>
            <div class="center div-page">
                <table class="white-text center">
                    <tbody>
                        <tr class="table-row">
                            <td>Opdracht nummer</td>
                            <td>TCTV nummer</td>
                            <td>Keuringdatum</td>
                            <td class="table-divider">Bekijken</td>
                            <td class="table-divider">Verwijderen</td>
                        </tr>
                <?php

                if ($resultcheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    
                        <tr>
                            <td><?php echo $row['Opdrachtnummer'] ?></td>
                            <td><?php echo $row['TCTV_nummer'] ?></td>
                            <td><?php echo $row['Keuringdatum'] ?></td>
                            <td><a href="View-voorblad.php?id=<?php echo $row['Opdrachtnummer'] ?>"><button class="button-center">X</button></a></td>
                            <td><a href="Delete-voorblad.php?id=<?php echo $row['Opdrachtnummer'] ?>"><button class="button-center">X</button></a></td>
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