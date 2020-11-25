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
        $username = $_SESSION['username']; ?>
        <div class="center">
            <form action="Include\PHP\hijskraan-add.php" method="post">
                <input class="login-form" type="number" name="opdrachtnummer" placeholder="Opdrachtnummer">
                <br>
                <input class="login-form" type="number" name="volgnummer" placeholder="Volgnummer">
                <br>
                <br>
                <input type="datetime-local" name="datetime">
                <br>
                <input class="login-form" type="number" name="hoofdgieklengte" placeholder="Hoofdgiek lengte">
                <br>
                <input class="login-form" type="number" name="mechsectiegieklengte" placeholder="Mech sectie gieklengte">
                <br>
                <input class="login-form" type="number" name="hulpgieklengte" placeholder="Hulpgiek lengte">
                <br>
                <input class="login-form" type="number" name="hoofdgiekgiekhoek" placeholder="Hoofdgiek giekhoek">
                <br>
                <input class="login-form" type="number" name="hulpgiekgiekhoek" placeholder="Hulpgiek giekhoek">
                <br>
                <input class="login-form" type="number" name="hijskabelaantalparten" placeholder="Hijskabel aantal parten">
                <br>
                <input class="login-form" type="number" name="zwenkhoek" placeholder="Zwenkhoek">
                <br>
                <input class="login-form" type="number" name="eigenmassaballast" placeholder="Eigen massa ballast">
                <br>
                <input class="login-form" type="number" name="toelaatbarebedrijflast" placeholder="Toelaatbare bedrijflast">
                <br>
                <input class="login-form" type="number" name="lmbinwerking" placeholder="LMB in werking">
                <br>
                <input class="login-form" type="number" name="proeflast" placeholder="Proeflast">
                <br>
                <p class="page-text">Akkoord: </p> <input type="checkbox" name="akkoord">
                <br>
                <button class="login-form" type="submit" name="hijskraanadd-submit">Toevoegen</button>
            </form>
        </div>


    <?php }
    else {
        echo '<br><h2 class="page-text center">U moet eerst inloggen.</h2>';
    }
?>
    
</body>
</html>