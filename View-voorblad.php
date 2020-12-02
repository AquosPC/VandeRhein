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
        
        <?php
            $opdrachtnummer = $_GET['opdrachtnummer'];

            $sql = "SELECT * FROM voorbladen
            INNER JOIN hijstesten ON voorbladen.Opdrachtnummer = hijstesten.Opdrachtnummer
            INNER JOIN kabelchecklisten ON voorbladen.Opdrachtnummer = kabelchecklisten.Opdrachtnummer
            WHERE voorbladen.Opdrachtnummer = $opdrachtnummer";

            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result); ?>
            <div class="center div-page"> <?php

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
                    <?php if ($row['Topbaar'] == 1) {
                    echo'<p class="voorblad-text">Topbaar: Ja</p>';
                    } else {
                        echo'<p class="voorblad-text">Topbaar: Nee</p>';
                    } ?>
                    <?php if ($row['Loopkat'] == 1) {
                    echo'<p class="voorblad-text">Loopkat: Ja</p>';
                    } else {
                        echo'<p class="voorblad-text">Loopkat: Nee</p>';
                    } ?>
                    <p class="voorblad-text">Verstelbare Giek: <?php echo $row['Verstelbare_giek']?></p>
                    <p class="voorblad-text">Soort Stempels: <?php echo $row['Soort_Stempels']?></p>
                    <?php if ($row['Tekortkomingen'] == 1) {
                    echo'<p class="voorblad-text">Tekortkomingen: Ja</p>';
                    } else {
                        echo'<p class="voorblad-text">Tekortkomingen: Nee</p>';
                    } ?>
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
                        <?php if ($row['Akkoord'] == 1) {
                           echo'<p class="voorblad-text">Akkoord: Ja</p>';
                        } else {
                            echo'<p class="voorblad-text">Akkoord: Nee</p>';
                        } ?>
                    <hr>
                    <h1 class="title-text text-left">kabelchecklist</h1>
                    <hr>
                    <p class="voorblad-text">KabelID: <?php echo $row['KabelID']?></p>
                    <p class="voorblad-text">Draadbreuk 6D: <?php echo $row['Draadbreuk_6D']?></p>
                    <p class="voorblad-text">Draadbreuk 30D: <?php echo $row['Draadbreuk_30D']?></p>
                    <p class="voorblad-text">Beschadiging Buitenzijde: <?php echo $row['Beschadiging_Buitenzijde']?></p>
                    <p class="voorblad-text">Beschadiging Roest Corrosie: <?php echo $row['Beschadiging_Roest_Corrosie']?></p>
                    <p class="voorblad-text">Verminderde Kabeldiameter: <?php echo $row['Verminderde_Kabeldiameter']?></p>
                    <p class="voorblad-text">Positie Meetpunten: <?php echo $row['Positie_Meetpunten']?></p>
                    <p class="voorblad-text">Beschadiging Totaal: <?php echo $row['Beschadiging_Totaal']?></p>
                    <p class="voorblad-text">Type Beschadiging Roest: <?php echo $row['Type_Beschadiging_Roest']?></p>
                <?php } die();
            } ?>
            </div> <?php


            $sql3 = "SELECT * FROM voorbladen 
            INNER JOIN hijstesten ON voorbladen.Opdrachtnummer = hijstesten.Opdrachtnummer WHERE voorbladen.Opdrachtnummer = $opdrachtnummer";

            $result3 = mysqli_query($conn, $sql3);
            $resultcheck3 = mysqli_num_rows($result3); ?>
            <div class="center div-page">
                <?php
                if ($resultcheck3 > 0) {
                    while ($row3 = mysqli_fetch_assoc($result3)) { ?>
                        <hr>
                        <h1 class="title-text text-left">Voorblad</h1>
                        <hr>
                        <p class="voorblad-text">Opdrachtnummer: <?php echo $row3['Opdrachtnummer']?></p>
                        <p class="voorblad-text">TCTV nummer: <?php echo $row3['TCTV_nummer']?></p>
                        <p class="voorblad-text">Keuringdatum: <?php echo $row3['Keuringdatum']?></p>
                        <p class="voorblad-text">Uitvoerder: <?php echo $row3['Uitvoerder']?></p>
                        <p class="voorblad-text">Deskundige: <?php echo $row3['Deskundige']?></p>
                        <p class="voorblad-text">Opstelling kraan: <?php echo $row3['Opstelling_Kraan']?></p>
                        <p class="voorblad-text">Uitvoering Toren Haakhoogte: <?php echo $row3['Uitvoering_Toren_Haakhoogte']?></p>
                        <p class="voorblad-text">Soort Giek: <?php echo $row3['Soort_Giek']?></p>
                        <p class="voorblad-text">Telescoopgiek Delen: <?php echo $row3['Telescoopgiek_Delen']?></p>
                        <p class="voorblad-text">Opbouwgiek Meters: <?php echo $row3['Opbouwgiek_Meters']?></p>
                        <p class="voorblad-text">Hulpgiek Meters: <?php echo $row3['Hulpgiek_Meters']?></p>
                        <p class="voorblad-text">Fly jib Delen: <?php echo $row3['Fly_jib_Delen']?></p>
                        <p class="voorblad-text">Gieklengte: <?php echo $row3['Gieklengte']?></p>
                        <?php if ($row3['Topbaar'] == 1) {
                           echo'<p class="voorblad-text">Topbaar: Ja</p>';
                        } else {
                            echo'<p class="voorblad-text">Topbaar: Nee</p>';
                        } ?>
                        <?php if ($row3['Loopkat'] == 1) {
                           echo'<p class="voorblad-text">Loopkat: Ja</p>';
                        } else {
                            echo'<p class="voorblad-text">Loopkat: Nee</p>';
                        } ?>
                        <p class="voorblad-text">Verstelbare Giek: <?php echo $row3['Verstelbare_giek']?></p>
                        <p class="voorblad-text">Soort Stempels: <?php echo $row3['Soort_Stempels']?></p>
                        <?php if ($row3['Tekortkomingen'] == 1) {
                           echo'<p class="voorblad-text">Tekortkomingen: Ja</p>';
                        } else {
                            echo'<p class="voorblad-text">Tekortkomingen: Nee</p>';
                        } ?>
                        <p class="voorblad-text">Afmelden voor: <?php echo $row3['Afmelden_Voor']?></p>
                        <p class="voorblad-text">Toelichting: <?php echo $row3['Toelichting']?></p>
                        <p class="voorblad-text">Werkinstructie: <?php echo $row3['Werkinstructie']?></p>
                        <p class="voorblad-text">Kabelleverancier: <?php echo $row3['Kabelleverancier']?></p>
                        <p class="voorblad-text">Waarnemingen: <?php echo $row3['Waarnemingen']?></p>
                        <p class="voorblad-text">Handtekening: <?php echo $row3['Handtekening']?></p>
                        <p class="voorblad-text">Aantal Bedrijfsuren: <?php echo $row3['Aantal_Bedrijfsuren']?></p>
                        <p class="voorblad-text">Afleg Redenen: <?php echo $row3['Afleg_Redenen']?></p>
                        <hr>
                        <h1 class="title-text text-left">Hijstest</h1>
                        <hr>
                        <p class="voorblad-text">Volgnummer: <?php echo $row3['Volgnummer']?></p>
                        <p class="voorblad-text">Datum Opgesteld: <?php echo $row3['Datum_Opgesteld']?></p>
                        <p class="voorblad-text">Hoofdgiek Lengte: <?php echo $row3['Hoofdgiek_Lengte']?></p>
                        <p class="voorblad-text">Mech Sectie Gieklengte: <?php echo $row3['Mech_Sectie_Gieklengte']?></p>
                        <p class="voorblad-text">Hulpgiek Lengte: <?php echo $row3['Hulpgiek_Lengte']?></p>
                        <p class="voorblad-text">Hoofdgiek Giekhoek: <?php echo $row3['Hoofdgiek_Giekhoek']?></p>
                        <p class="voorblad-text">Hulpgiek Giekhoek: <?php echo $row3['Hulpgiek_Giekhoek']?></p>
                        <p class="voorblad-text">Hijskabel Aantal Parten: <?php echo $row3['Hijskabel_Aantal_Parten']?></p>
                        <p class="voorblad-text">Zwenkhoek: <?php echo $row3['Zwenkhoek']?></p>
                        <p class="voorblad-text">Eigen Massa Ballast: <?php echo $row3['Eigen_Massa_Ballast']?></p>
                        <p class="voorblad-text">Toelaatbare Bedrijflast: <?php echo $row3['Toelaatbare_Bedrijflast']?></p>
                        <p class="voorblad-text">LMB in Werking: <?php echo $row3['LMB_In_Werking']?></p>
                        <p class="voorblad-text">Proeflast: <?php echo $row3['Proeflast']?></p>
                        <?php if ($row3['Akkoord'] == 1) {
                           echo'<p class="voorblad-text">Akkoord: Ja</p>';
                        } else {
                            echo'<p class="voorblad-text">Akkoord: Nee</p>';
                        } ?>
                        
                    <?php }
            } else {?>
                <div class="center div-page">

                <?php
                $sql2 = "SELECT * FROM voorbladen 
                INNER JOIN kabelchecklisten ON voorbladen.Opdrachtnummer = kabelchecklisten.Opdrachtnummer WHERE voorbladen.Opdrachtnummer = $opdrachtnummer";

                $result2 = mysqli_query($conn, $sql2);
                $resultcheck2 = mysqli_num_rows($result2);

                if ($resultcheck2 > 0) {
                    while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                        <hr>
                        <h1 class="title-text text-left">Voorblad</h1>
                        <hr>
                        <p class="voorblad-text">Opdrachtnummer: <?php echo $row2['Opdrachtnummer']?></p>
                        <p class="voorblad-text">TCTV nummer: <?php echo $row2['TCTV_nummer']?></p>
                        <p class="voorblad-text">Keuringdatum: <?php echo $row2['Keuringdatum']?></p>
                        <p class="voorblad-text">Uitvoerder: <?php echo $row2['Uitvoerder']?></p>
                        <p class="voorblad-text">Deskundige: <?php echo $row2['Deskundige']?></p>
                        <p class="voorblad-text">Opstelling kraan: <?php echo $row2['Opstelling_Kraan']?></p>
                        <p class="voorblad-text">Uitvoering Toren Haakhoogte: <?php echo $row2['Uitvoering_Toren_Haakhoogte']?></p>
                        <p class="voorblad-text">Soort Giek: <?php echo $row2['Soort_Giek']?></p>
                        <p class="voorblad-text">Telescoopgiek Delen: <?php echo $row2['Telescoopgiek_Delen']?></p>
                        <p class="voorblad-text">Opbouwgiek Meters: <?php echo $row2['Opbouwgiek_Meters']?></p>
                        <p class="voorblad-text">Hulpgiek Meters: <?php echo $row2['Hulpgiek_Meters']?></p>
                        <p class="voorblad-text">Fly jib Delen: <?php echo $row2['Fly_jib_Delen']?></p>
                        <p class="voorblad-text">Gieklengte: <?php echo $row2['Gieklengte']?></p>
                        <?php if ($row2['Topbaar'] == 1) {
                           echo'<p class="voorblad-text">Topbaar: Ja</p>';
                        } else {
                            echo'<p class="voorblad-text">Topbaar: Nee</p>';
                        } ?>
                        <?php if ($row2['Loopkat'] == 1) {
                           echo'<p class="voorblad-text">Loopkat: Ja</p>';
                        } else {
                            echo'<p class="voorblad-text">Loopkat: Nee</p>';
                        } ?>
                        <p class="voorblad-text">Verstelbare Giek: <?php echo $row2['Verstelbare_giek']?></p>
                        <p class="voorblad-text">Soort Stempels: <?php echo $row2['Soort_Stempels']?></p>
                        <?php if ($row2['Tekortkomingen'] == 1) {
                           echo'<p class="voorblad-text">Tekortkomingen: Ja</p>';
                        } else {
                            echo'<p class="voorblad-text">Tekortkomingen: Nee</p>';
                        } ?>
                        <p class="voorblad-text">Afmelden voor: <?php echo $row2['Afmelden_Voor']?></p>
                        <p class="voorblad-text">Toelichting: <?php echo $row2['Toelichting']?></p>
                        <p class="voorblad-text">Werkinstructie: <?php echo $row2['Werkinstructie']?></p>
                        <p class="voorblad-text">Kabelleverancier: <?php echo $row2['Kabelleverancier']?></p>
                        <p class="voorblad-text">Waarnemingen: <?php echo $row2['Waarnemingen']?></p>
                        <p class="voorblad-text">Handtekening: <?php echo $row2['Handtekening']?></p>
                        <p class="voorblad-text">Aantal Bedrijfsuren: <?php echo $row2['Aantal_Bedrijfsuren']?></p>
                        <p class="voorblad-text">Afleg Redenen: <?php echo $row2['Afleg_Redenen']?></p>
                        <hr>
                        <h1 class="title-text text-left">kabelchecklist</h1>
                        <hr>
                        <p class="voorblad-text">KabelID: <?php echo $row2['KabelID']?></p>
                        <p class="voorblad-text">Draadbreuk 6D: <?php echo $row2['Draadbreuk_6D']?></p>
                        <p class="voorblad-text">Draadbreuk 30D: <?php echo $row2['Draadbreuk_30D']?></p>
                        <p class="voorblad-text">Beschadiging Buitenzijde: <?php echo $row2['Beschadiging_Buitenzijde']?></p>
                        <p class="voorblad-text">Beschadiging Roest Corrosie: <?php echo $row2['Beschadiging_Roest_Corrosie']?></p>
                        <p class="voorblad-text">Verminderde Kabeldiameter: <?php echo $row2['Verminderde_Kabeldiameter']?></p>
                        <p class="voorblad-text">Positie Meetpunten: <?php echo $row2['Positie_Meetpunten']?></p>
                        <p class="voorblad-text">Beschadiging Totaal: <?php echo $row2['Beschadiging_Totaal']?></p>
                        <p class="voorblad-text">Type Beschadiging Roest: <?php echo $row2['Type_Beschadiging_Roest']?></p>
                    <?php }
            } ?>
        </div>
         <?php   } ?>
        </div>


    <?php }
    else {
        echo '<br><h2 class="page-text center">U moet eerst inloggen.</h2>';
    }
?>
    
</body>
</html>