<?php

if (isset($_POST['voorblad-add-submit'])) {
    require 'conn.php';

    $opdrachtnummer = $_POST['opdrachtnummer'];
    $tctvnummer = $_POST['tctvnummer'];
    $keuringdatum = strtotime($_POST['keuringdatum']);
    $keuringdatum = date('YmdHis', $keuringdatum);
    $uitvoerder = $_POST['uitvoerder'];
    $deskundige = $_POST['deskundige'];
    $opstellingkraan = $_POST['opstellingkraan'];
    $uitvoeringtorenhaakhoogte = $_POST['uitvoeringtorenhaakhoogte'];
    $soortgiek = $_POST['soortgiek'];
    $telescoopgiekdelen = $_POST['telescoopgiekdelen'];
    $opbouwgiekmeters = $_POST['opbouwgiekmeters'];
    $hulpgiekmeters = $_POST['hulpgiekmeters'];
    $flyjibdelen = $_POST['flyjibdelen'];
    $giekdelen = $_POST['gieklengte'];
    $topbaar = isset($_POST['topbaar']);
    $loopkat = isset($_POST['loopkat']);
    $verstelbaregiek = $_POST['verstelbaregiek'];
    $soortstempels = $_POST['soortstempels'];
    $tekortkomingen = isset($_POST['tekortkomingen']);
    $afmelddatum = strtotime($_POST['afmelddatum']);
    $afmelddatum = date('YmdHis', $afmelddatum);
    $toelichting = $_POST['toelichting'];
    $werkinstructie = $_POST['werkinstructie'];
    $kabelleverancier = $_POST['kabelleverancier'];
    $waarnemingen = $_POST['waarnemingen'];
    $handtekening = $_POST['handtekening'];
    $bedrijfsuren = $_POST['bedrijfsuren'];
    $aflegredenen = $_POST['aflegredenen'];

    $sql = "INSERT INTO voorbladen (Opdrachtnummer, TCTV_nummer, Keuringdatum, Uitvoerder, Deskundige, Opstelling_Kraan, Uitvoering_Toren_Haakhoogte, Soort_Giek, Telescoopgiek_Delen, Opbouwgiek_Meters, Hulpgiek_Meters, Fly_jib_Delen, Gieklengte, Topbaar, Loopkat, Verstelbare_giek, Soort_Stempels, Tekortkomingen, Afmelden_Voor, Toelichting, Werkinstructie, Kabelleverancier, Waarnemingen, Handtekening, Aantal_Bedrijfsuren, Afleg_Redenen) 
    VALUES ('$opdrachtnummer', '$tctvnummer', '$keuringdatum', '$uitvoerder', '$deskundige', '$opstellingkraan', '$uitvoeringtorenhaakhoogte', '$soortgiek', '$telescoopgiekdelen', '$opbouwgiekmeters', '$hulpgiekmeters', '$flyjibdelen', '$giekdelen', '$topbaar', '$loopkat', '$verstelbaregiek', '$soortstempels', '$tekortkomingen', '$afmelddatum', '$toelichting', '$werkinstructie', '$kabelleverancier', '$waarnemingen', '$handtekening', '$bedrijfsuren', '$aflegredenen')";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../../hijskranentest-aanmaken.php?opdrachtnummer=".$opdrachtnummer);
        exit();
    }
    else {
        header("Location: ../../Voorbladen?error2");
        exit();
    }
    
}
else {
    header("Location: ../../Voorbladen?error");
    exit();
}

?>