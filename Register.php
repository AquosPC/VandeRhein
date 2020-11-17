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
    $ID = 1;
    require 'Include\PHP\navbar.php';
    require 'Include\PHP\conn.php';
    if (isset($_SESSION['id'])) {


        require 'Include\PHP\register-window.php';
    }
    else {
        echo '<br><h2 class="page-text center">U moet eerst inloggen</h2>';
    }
    ?>

</body>
</html>