<?php
require 'conn.php';

if (isset($_POST['delete-submit'])) {
    $opdrachtnummer = mysqli_escape_string($conn, $_GET['opdrachtnummer']);
    $sql = "DELETE FROM `voorbladen` WHERE `voorbladen`.`opdrachtnummer` = $opdrachtnummer";
    if (mysqli_query($conn, $sql)) {
        header("Location: delete-hijskraan.php?opdrachtnummer=".$opdrachtnummer);
    }
    else {
        header("Location: ../../Voorbladen?errorvoorblad=sql2");
    }

}
else {
    header("Location: ../../Voorbladen?errorvoorblad=sql");
}


?>