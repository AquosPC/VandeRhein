<?php

if (isset($_POST['kabelchecklistadd-submit'])) {
    require 'conn.php';

    $opdrachtnummer = $_POST['opdrachtnummer'];
    $kabelID = $_POST['kabelid'];
    $draadbreuk6d = $_POST['draadbreuk6d'];
    $draadbreuk30d = $_POST['draadbreuk30d'];
    $beschadigingbuitenzijde = $_POST['beschadigingbuitenzijde'];
    $beschadigingroestcorrosie = $_POST['beschadigingroestcorrosie'];
    $verminderdekabeldiameter = $_POST['verminderdekabeldiameter'];
    $positiemeetpunten = $_POST['positiemeetpunten'];
    $beschadigingtotaal = $_POST['beschadigingtotaal'];
    $typebeschadigingroest = $_POST['typebeschadigingroest'];

    if ($_POST['akkoord'] = on) {
        $akkoord = True;
    }
    else {
        $akkoord = False;
    }

    $sql = "INSERT INTO kabelchecklisten (Opdrachtnummer, KabelID, Draadbreuk_6D, Draadbreuk_30D, Beschadiging_Buitenzijde, Beschadiging_Roest_Corrosie, Verminderde_Kabeldiameter, Positie_Meetpunten, Beschadiging_Totaal, Type_Beschadiging_Roest)
     VALUES ($opdrachtnummer, $kabelID, $draadbreuk6d, $draadbreuk30d, $beschadigingbuitenzijde, $beschadigingroestcorrosie, $verminderdekabeldiameter, $positiemeetpunten, $beschadigingtotaal, $typebeschadigingroest)";

   if (mysqli_query($conn, $sql)) {
        header("Location: ../../Voorbladen?Success");
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