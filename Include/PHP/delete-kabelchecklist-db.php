<?php
require 'conn.php';


$opdrachtnummer = mysqli_escape_string($conn, $_GET['opdrachtnummer']);
$sql = "DELETE FROM `kabelchecklisten` WHERE `kabelchecklisten`.`opdrachtnummer` = $opdrachtnummer";
if (mysqli_query($conn, $sql)) {
    header("Location: ../../Voorbladen?deletekabelchecklist=success");
}
else {
    header("Location: ../../Voorbladen?deletekabelchecklist=sql2");
}


?>