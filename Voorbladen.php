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
    <?php }
    else {
        echo '<br><h2 class="page-text center">U moet eerst inloggen.</h2>';
    }
?>
    
</body>
</html>