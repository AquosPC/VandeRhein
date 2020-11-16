<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBname = "vanderhein";

$conn = new mysqli($servername, $username, $password, $DBname);

if (!$conn) {
    die("error:" . $mysqli_connect_error());
}

?>