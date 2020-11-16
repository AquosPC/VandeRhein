<?php

if (isset($_POST['signin-submit'])) {
    require 'conn.php';

    $username = $_POST['username'];
    $pwd = $_POST['Password'];

    if (empty($username) || empty($pwd)) {
        header("Location: ../../Login?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../Login?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $pwd);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdcheck = password_verify($pwd, $row['password']);
                if ($pwdcheck == false) {
                    header("Location: ../../Login?error=wrongpwd");
                    exit();
                } elseif ($pwdcheck == true) {
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];

                    header("Location: ../../Login?login=success");
                    exit();
                }
            }
            else {
                header("Location: ../../Login?error=nouser");
                exit();
            }
        }
    }

}
else {
    header("Location: ../../Login");
    exit();
}