<?php

if (isset($_POST['hijskraanadd-submit'])) {
    require 'conn.php';

    $opdrachtnummer = $_POST['opdrachtnummer'];
    $volgnummer = $_POST['volgnummer'];
    $datum = $_POST['datetime'];
    $hoofdgieklengte = $_POST['hoofdgieklengte'];
    $mechsectiegieklengte = $_POST['mechsectiegieklengte'];
    $hulpgieklengte = $_POST['hulpgieklengte'];
    $hoofdgiekgiekhoek = $_POST['hoofdgiekgiekhoek'];
    $hulpgiekgiekhoek = $_POST['hulpgiekgiekhoek'];
    $hijskabelaantalparten = $_POST['hijskabelaantalparten'];
    $zwenkhoek = $_POST['zwenkhoek'];
    $eigenmassaballast = $_POST['eigenmassaballast'];
    $toelaatbarebedrijflast = $_POST['toelaatbarebedrijflast'];
    $lmbinwerking = $_POST['lmbinwerking'];
    $proeflast = $_POST['proeflast'];
    $akkoord = $_POST['akkoord'];

    $sql = "INSERT INTO hijstesten (Opdrachtnummer, Volgnummer, Datum_Opgesteld, Hoofdgiek_Lengte, Mech_Sectie_Gieklengte, Hulpgiek_Lengte, Hoofdgiek_Giekhoek, Hulpgiek_Giekhoek, Hijskabel_Aantal_Parten, Zwenkhoek, Eigen_Massa_Ballast, Toelaatbare_Bedrijflast, LMB_In_Werking, Proeflast, Akkoord)
     VALUES ($opdrachtnummer, $volgnummer, $datum, $hoofdgieklengte, $mechsectiegieklengte, $hulpgieklengte, $hoofdgiekgiekhoek, $hulpgiekgiekhoek, $hijskabelaantalparten, $zwenkhoek, $eigenmassaballast, $toelaatbarebedrijflast, $lmbinwerking, $proeflast, $akkoord)";

    
}
else {
    header("Location: /hijskranentest?error");
}

?>