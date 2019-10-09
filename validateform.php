<?php
$errors = array();
if(isset($_POST["signup-button"])){

    require "dbconn.php";


    $username= mysqli_real_escape_string($conn,$_POST["username"]);
    $useremail= mysqli_real_escape_string($conn,$_POST["email"]);
    $userpassword= mysqli_real_escape_string($conn,$_POST["password"]);
    $userpassword2= mysqli_real_escape_string($conn,$_POST["password2"]);

    if(empty($username) || empty($useremail) || empty($userpassword) || empty($userpassword2) ){
        header("Location: signup.php?error=emptyfields");
        exit();
    }
    else{
        if(!filter_var($useremail,FILTER_VALIDATE_EMAIL)){
            header("Location: signup.php?error=wrongemail&username=\".$username.\"");
            exit();
        }
        elseif (!preg_match("/[a-zA-Z0-9]/",$username)){
            header("Location: signup.php?error=wrongusername&email=\".$useremail");
            exit();
        }
        elseif($userpassword !== $userpassword2){
            header("Location: signup.php?error=passwordsdontmatch&username=\".$username.\"&email=\".$useremail") ;
            exit();
        }
        else{
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt,"SELECT user_email FROM user WHERE user_email = ?");
            mysqli_stmt_bind_param($stmt,"s",$useremail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            if(mysqli_num_rows($result) >0){
                header("Location: signup.php?error=userexists&username=\".$username.\"&email=\".$useremail");
                exit();
            }
            else{
                $userpassword = password_hash($userpassword,PASSWORD_DEFAULT);
                $stmt =mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,"INSERT INTO user (user_name,user_email,user_password) VALUES (?,?,?)");
                mysqli_stmt_bind_param($stmt,"sss",$username,$useremail,$userpassword);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                header("Location: signup.php?error=noerror");
                exit();
            }
        }

    }
    mysqli_close($conn);


}
else{
    header("Location: signup.php");
    exit();
}
