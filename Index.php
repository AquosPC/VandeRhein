<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Include\CSS\Main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Over de Rhein - Home</title>
</head>
<body>
    <?php
    $ID = 0;
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
    if (isset($_SESSION['id'])) {
        $username = $_SESSION['username'];

        echo '<br><h2 class="page-text center">Welkom, ' . $username . '</h2>';
    }
    else {
        echo '<br><h2 class="page-text center">U moet eerst inloggen.</h2>';
    }
?>
    
</body>
</html>