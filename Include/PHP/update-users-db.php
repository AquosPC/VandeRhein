<?php
if (isset($_POST['update-submit'])) {
    
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
            if ($password !== empty($password)) {
                $sql = "UPDATE `users` SET `email` = '?',`password` = '?',`username` = '?' WHERE `users`.`id` =".$_POST['id'];
                $stmt = mysqli_stmt_init($conn);


                $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "sss", $email, $hashedpwd, $username);
                mysqli_stmt_execute($stmt);
                header("Location: ../../register?updatewithpassword=success");
                exit();

            }
            else {
                $sql = "UPDATE INTO users (email, password, username) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../../register?error=sql3error");
                    exit();
                }
                    else {
    
                        mysqli_stmt_bind_param($stmt, "ss", $email, $username);
                        mysqli_stmt_execute($stmt);
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