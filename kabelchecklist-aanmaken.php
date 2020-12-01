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
    if (isset($_SESSION['id'])) {
        //$opdrachtnummer = mysqli_escape_string($conn, $_GET['opdrachtnummer']); ?>
        <div class="center">
            <form action="Include\PHP\kabelchecklist-add.php" method="post">
                <input class="login-form" type="number" name="opdrachtnummer" placeholder="Opdrachtnummer" value="<?php $opdrachtnummer ?>">
                <br>
                <input class="login-form" type="number" name="kabelid" placeholder="KabelID">
                <br>
                <input class="login-form" type="number" name="draadbreuk6d" placeholder="Draadbreuk 6D">
                <br>
                <input class="login-form" type="number" name="draadbreuk30d" placeholder="Draadbreuk 30D">
                <br>
                <input class="login-form" type="number" name="beschadigingbuitenzijde" placeholder="Beschadiging Buitenzijde">
                <br>
                <input class="login-form" type="number" name="beschadigingroestcorrosie" placeholder="Beschadiging Roest Corrosie">
                <br>
                <input class="login-form" type="number" name="verminderdekabeldiameter" placeholder="Verminderde Kabeldiameter">
                <br>
                <input class="login-form" type="number" name="positiemeetpunten" placeholder="Positie Meetpunten">
                <br>
                <input class="login-form" type="number" name="beschadigingtotaal" placeholder="Beschadiging Totaal">
                <br>
                <input class="login-form" type="number" name="typebeschadigingroest" placeholder="Type Beschadiging Roest">
                <br>
                <button class="login-form" type="submit" name="kabelchecklistadd-submit">Toevoegen</button>
            </form>
        </div>


    <?php }
    else {
        echo '<br><h2 class="page-text center">U moet eerst inloggen.</h2>';
    }
?>
    
</body>
</html>