<?php
require 'conn.php';

if (isset($_POST['delete-submit'])) {
    $id = mysqli_escape_string($conn, $_GET['id']);
    $sql = "DELETE FROM `users` WHERE `users`.`id` = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../../users?delete=success");
    }
    else {
        header("Location: ../../users?error=sql2");
    }

}
else {
    header("Location: ../../users?error=sql");
}


?>