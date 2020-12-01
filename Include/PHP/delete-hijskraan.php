<?php
require 'conn.php';


$opdrachtnummer = mysqli_escape_string($conn, $_GET['opdrachtnummer']);
$sql = "DELETE FROM `hijstesten` WHERE `hijstesten`.`opdrachtnummer` = $opdrachtnummer";
if (mysqli_query($conn, $sql)) {
    header("Location: delete-kabelchecklist-db.php?opdrachtnummer=".$opdrachtnummer);
}
else {
    header("Location: ../../Voorbladen?deletehijskraan=failed");
}

?>