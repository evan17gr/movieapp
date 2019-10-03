<?php

if(isset($_POST["signup-button"])){

    $errors = array();

    $dbServerName = "localhost";
    $dbUserName = "evan";
    $dbPassword = "1999yore";
    $dbName = "movies";

    $conn = new mysqli($dbServerName,$dbUserName,$dbPassword,$dbName);

    if($conn->connect_error){
        echo "Couldn't connect to the database" . $conn->connect_error;
    }

    $username= mysqli_real_escape_string($conn,$_POST["username"]);
    $useremail= mysqli_real_escape_string($conn,$_POST["email"]);
    $userpassword= mysqli_real_escape_string($conn,$_POST["password"]);
    $userpassword2= mysqli_real_escape_string($conn,$_POST["password2"]);

    if(empty($username) || empty($useremail) || empty($userpassword) || empty($userpassword2) ){
        array_push($errors,"Please complete all of the fields");
        echo "empty fields";
        exit();
    }
    else{
        if(!filter_var($useremail,FILTER_VALIDATE_EMAIL)){
            array_push($errors,"Please enter a valid email");
            echo "wrong email";
            exit();
        }
        elseif (!preg_match("/[a-zA-Z0-9]/",$username)){
            array_push($errors,"Please only use letters and numbers for your username");
            echo "wrong username";
            exit();
        }
        elseif($userpassword !== $userpassword2){
            array_push($errors,"The two passwords don't match");
            echo "passwords dont match";
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
                array_push($errors,"A user with that email already exists");
                echo "username exists";


            }
            else{
                $userpassword = md5($userpassword);
                $stmt =mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,"INSERT INTO user (user_name,user_email,user_password) VALUES (?,?,?)");
                mysqli_stmt_bind_param($stmt,"sss",$username,$useremail,$userpassword);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                echo "You have now signed up!";

            }
        }

    }

}

