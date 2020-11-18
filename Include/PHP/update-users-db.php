<?php
if (isset($_POST['update-submit'])) {
    
    require 'conn.php';
    $id = mysqli_escape_string($conn, $_GET['id']);
    $username = $_POST['username'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwdrepeat'];

    if ($password !== $passwordRepeat) {
        header("Location: ../../register?error=wachtwoordfout");
        exit();
    }
    else {
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../register?error=sql1error");
            exit();
        }
            if ($password != NULL) {
                $sql = "DELETE FROM `users` WHERE `users`.`id` = $id";
                //$sql = "UPDATE users SET (email, username, password) VALUES ('$email', '$username', '$hashedpwd') WHERE `users`.`id` = $id";
                //$sql = " users (email, password, username) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                //mysqli_stmt_bind_param('s', $hashedpwd);
                //mysqli_stmt_bind_param($stmt, ":password", $hashedpwd);
                //mysqli_stmt_execute($stmt);
                mysqli_stmt_execute($stmt);
                    header("Location: ../../Index?updatewithpassword=success");
                    exit();

            }
            else {
                /* $sql = "UPDATE users SET email=?, username=? WHERE id = ?"; */
                $sql = "UPDATE `users` SET `email` = '$email', `username` = '$username' WHERE `users`.`id` = $id";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../../register?error=sql3error");
                    echo $sql;
                    exit();
                }
                    else {
                        mysqli_stmt_execute($stmt);
                        echo $sql;
                        die();
                        header("Location: ../../register?updatewithoutpassword=success");
                        exit();
                    } 
            }
        }
        
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../../Users");
    exit();
}
?>