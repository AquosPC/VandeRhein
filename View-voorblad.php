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
        
        </div> <?php
            $opdrachtnummer = $_GET['opdrachtnummer'];

            $sql = "SELECT * FROM voorbladen 
            INNER JOIN hijstesten ON voorbladen.Opdrachtnummer = hijstesten.Opdrachtnummer";

            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result); ?>
            <div class="center div-page">
                <?php
                if ($resultcheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <hr>
                        <h1 class="title-text text-left">Voorblad</h1>
                        <hr>
                        <p class="voorblad-text">Opdrachtnummer: <?php echo $row['Opdrachtnummer']?></p>
                        <p class="voorblad-text">TCTV nummer: <?php echo $row['TCTV_nummer']?></p>
                        <p class="voorblad-text">Keuringdatum: <?php echo $row['Keuringdatum']?></p>
                        <p class="voorblad-text">Uitvoerder: <?php echo $row['Uitvoerder']?></p>
                        <p class="voorblad-text">Deskundige: <?php echo $row['Deskundige']?></p>
                        <p class="voorblad-text">Opstelling kraan: <?php echo $row['Opstelling_Kraan']?></p>
                        <p class="voorblad-text">Uitvoering Toren Haakhoogte: <?php echo $row['Uitvoering_Toren_Haakhoogte']?></p>
                        <p class="voorblad-text">Soort Giek: <?php echo $row['Soort_Giek']?></p>
                        <p class="voorblad-text">Telescoopgiek Delen: <?php echo $row['Telescoopgiek_Delen']?></p>
                        <p class="voorblad-text">Opbouwgiek Meters: <?php echo $row['Opbouwgiek_Meters']?></p>
                        <p class="voorblad-text">Hulpgiek Meters: <?php echo $row['Hulpgiek_Meters']?></p>
                        <p class="voorblad-text">Fly jib Delen: <?php echo $row['Fly_jib_Delen']?></p>
                        <p class="voorblad-text">Gieklengte: <?php echo $row['Gieklengte']?></p>
                        <p class="voorblad-text">Topbaar: <?php echo $row['Topbaar']?></p>
                        <p class="voorblad-text">Loopkat: <?php echo $row['Loopkat']?></p>
                        <p class="voorblad-text">Verstelbare Giek: <?php echo $row['Verstelbare_giek']?></p>
                        <p class="voorblad-text">Soort Stempels: <?php echo $row['Soort_Stempels']?></p>
                        <p class="voorblad-text">Tekortkomingen: <?php echo $row['Tekortkomingen']?></p>
                        <p class="voorblad-text">Afmelden voor: <?php echo $row['Afmelden_Voor']?></p>
                        <p class="voorblad-text">Toelichting: <?php echo $row['Toelichting']?></p>
                        <p class="voorblad-text">Werkinstructie: <?php echo $row['Werkinstructie']?></p>
                        <p class="voorblad-text">Kabelleverancier: <?php echo $row['Kabelleverancier']?></p>
                        <p class="voorblad-text">Waarnemingen: <?php echo $row['Waarnemingen']?></p>
                        <p class="voorblad-text">Handtekening: <?php echo $row['Handtekening']?></p>
                        <p class="voorblad-text">Aantal Bedrijfsuren: <?php echo $row['Aantal_Bedrijfsuren']?></p>
                        <p class="voorblad-text">Afleg Redenen: <?php echo $row['Afleg_Redenen']?></p>
                        <hr>
                        <h1 class="title-text text-left">Hijstest</h1>
                        <hr>
                        <p class="voorblad-text">Volgnummer: <?php echo $row['Volgnummer']?></p>
                        <p class="voorblad-text">Datum Opgesteld: <?php echo $row['Datum_Opgesteld']?></p>
                        <p class="voorblad-text">Hoofdgiek Lengte: <?php echo $row['Hoofdgiek_Lengte']?></p>
                        <p class="voorblad-text">Mech Sectie Gieklengte: <?php echo $row['Mech_Sectie_Gieklengte']?></p>
                        <p class="voorblad-text">Hulpgiek Lengte: <?php echo $row['Hulpgiek_Lengte']?></p>
                        <p class="voorblad-text">Hoofdgiek Giekhoek: <?php echo $row['Hoofdgiek_Giekhoek']?></p>
                        <p class="voorblad-text">Hulpgiek Giekhoek: <?php echo $row['Hulpgiek_Giekhoek']?></p>
                        <p class="voorblad-text">Hijskabel Aantal Parten: <?php echo $row['Hijskabel_Aantal_Parten']?></p>
                        <p class="voorblad-text">Zwenkhoek: <?php echo $row['Zwenkhoek']?></p>
                        <p class="voorblad-text">Eigen Massa Ballast: <?php echo $row['Eigen_Massa_Ballast']?></p>
                        <p class="voorblad-text">Toelaatbare Bedrijflast: <?php echo $row['Toelaatbare_Bedrijflast']?></p>
                        <p class="voorblad-text">LMB in Werking: <?php echo $row['LMB_In_Werking']?></p>
                        <p class="voorblad-text">Proeflast: <?php echo $row['Proeflast']?></p>
                        <?php if ($row['Akkoord'] = 1) {
                           echo'<p class="voorblad-text">Akkoord: Ja</p>';
                        } else {
                            echo'<p class="voorblad-text">Akkoord: Nee</p>';
                        } ?>
                        
                    <?php }
            } ?>
        </div>

    <?php }
    else {
        echo '<br><h2 class="page-text center">U moet eerst inloggen.</h2>';
    }
?>
    
</body>
</html>