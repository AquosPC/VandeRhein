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
            <form action="Include\PHP\voorbladkabelchecklist-add.php" method="post">
                <input class="login-form" type="number" name="opdrachtnummer" placeholder="Opdrachtnummer">
                <br>
                <input class="login-form" type="number" name="tctvnummer" placeholder="TCTV Nummer">
                <br>
                <p class="page-text">keuringdatum: </p>
                <input type="datetime-local" name="keuringdatum">
                <br>
                <input class="login-form" type="text" name="uitvoerder" placeholder="Uitvoerder">
                <br>
                <input class="login-form" type="text" name="deskundige" placeholder="Deskundige">
                <br>
                <input class="login-form" type="text" name="opstellingkraan" placeholder="Opstelling Kraan">
                <br>
                <input class="login-form" type="number" name="uitvoeringtorenhaakhoogte" placeholder="Uitvoering Toren Haakhoogte">
                <br>
                <input class="login-form" type="text" name="soortgiek" placeholder="Soort Giek">
                <br>
                <input class="login-form" type="number" name="telescoopgiekdelen" placeholder="Telescoopgiek Delen">
                <br>
                <input class="login-form" type="number" name="opbouwgiekmeters" placeholder="Opbouwgiek Meters">
                <br>
                <input class="login-form" type="number" name="hulpgiekmeters" placeholder="Hulpgiek Meters">
                <br>
                <input class="login-form" type="number" name="flyjibdelen" placeholder="Fly jib Delen">
                <br>
                <input class="login-form" type="number" name="gieklengte" placeholder="Gieklengte">
                <br>
                <input class="login-form" type="number" name="topbaar" placeholder="Topbaar">
                <br>
                <input class="login-form" type="number" name="loopkat" placeholder="Loopkat">
                <br>
                <input class="login-form" type="number" name="verstelbaregiek" placeholder="Verstelbare giek">
                <br>
                <input class="login-form" type="number" name="soortstempels" placeholder="Soort Stempels">
                <br>
                <input class="login-form" type="number" name="tekortkomingen" placeholder="Tekortkomingen">
                <br>
                <p class="page-text">Afmelden voor: </p>
                <input type="datetime-local" name="afmelddatum">
                <br>
                <br>
                <p class="page-text">Toelichting: </p>
                <textarea class="login-form" name="toelichting" cols="60" rows="10"></textarea>
                <br>
                <br>
                <p class="page-text">Werkinstructie: </p>
                <textarea class="login-form" name="werkinstructie" cols="60" rows="10"></textarea>
                <br>
                <br>
                <p class="page-text">Kabelleverancier: </p>
                <textarea class="login-form" name="kabelleverancier" cols="60" rows="10"></textarea>
                <br>
                <br>
                <p class="page-text">Waarnemingen: </p>
                <textarea class="login-form" name="waarnemingen" cols="60" rows="10"></textarea>
                <br>
                <input class="login-form" type="text" name="handtekening" placeholder="Handtekening">
                <br>
                <input class="login-form" type="number" name="bedrijfsuren" placeholder="Aantal Bedrijfsuren">
                <br>
                <p class="page-text">Afleg Redenen: </p>
                <textarea class="login-form" name="aflegredenen" cols="60" rows="10"></textarea>
                <br>
                <br>
                
                <button class="login-form login-button" type="submit" name="voorblad-add-submit">Toevoegen & Verdergaan</button>
            </form>
        </div>


    <?php }
    else {
        echo '<br><h2 class="page-text center">U moet eerst inloggen.</h2>';
    }
?>
    
</body>
</html>