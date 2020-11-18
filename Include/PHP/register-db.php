<?php
if (isset($_POST['signup-submit'])) {
    
    require 'conn.php';

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
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../../register?error=usernametaken");
                exit();
            }
            else {
            $sql = "INSERT INTO users (email, password, username) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../../register?error=sql2error");
                exit();
            }
            else {
                $hashedpwd = password_hash($password, PASSWORD_BCRYPT);

                mysqli_stmt_bind_param($stmt, "sss", $email, $hashedpwd, $username);
                mysqli_stmt_execute($stmt);
                header("Location: ../../register?signup=success");
                exit();
                }
            }
        }
        
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../../register");
    exit();
}
?>