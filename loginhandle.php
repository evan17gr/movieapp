<?php

if (isset($_POST["login-button"])) {

    require "dbconn.php";

    $email = mysqli_real_escape_string($conn, $_POST["email1"]);
    $password = mysqli_real_escape_string($conn, $_POST["password1"]);

    if (empty($email) || empty($password)) {
        header("Location: login.php?error=emptyfields");
        echo "empty fields";
    } else {
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, "SELECT * FROM user WHERE user_email=?")) {
            header("Location: login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_prepare($stmt, "SELECT * FROM user WHERE user_email=?");
            mysqli_stmt_bind_param($stmt, "s",$email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $passwordcheck = password_verify($password, $row["user_password"]);
                if ($passwordcheck == false) {
                    header("Location: login.php?error=wrongpassword");
                    exit();
                } elseif ($passwordcheck == true && $row["user_email"] == $email) {
                    session_start();
                    $_SESSION["userid"] = $row["user_id"];
                    $_SESSION["username"] = $row["user_name"];

                    header("Location: home.php?error=noerror");
                    exit();
                } else {
                    header("Location: login.php?error=wrongemail");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: signup.php");
    exit();
}
