<?php
require "header.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Movie Library</title>
    <style>
        .regform{
            background-color: #55d6aa;
            font-family: Montserrat;
            border-radius: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 500px;
            padding:0px 40px;
            background-color: rgba(0,0,0,0.7);
            color: white;
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,0.5);
        }

        h1{
            text-align: center;
            padding: 0;
        }

        .regform .inputhandle{
            position: relative;

        }

        .regform .inputhandle input{
            width: 100%;
            padding: 10px 0;
            color: #ffffff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #ffffff;
            outline: none;
            background: transparent;
        }

        .regform input[type="submit"]
        {
            border: none;
            color: #666666;
            padding:10px 20px;
            cursor: pointer;
            border-radius: 5px;
            background:rgb(85, 214, 170);
        }

        .regform input[type="submit"]:hover
        {
            color: black;
        }

        #signuperrors{

            float: right;

        }

        #submbut{
            float: left;
        }

        .icon{
            color:red;
        }

        #success{
            color: green;
        }

        .signuperror{
            color: red;
        }


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="regform">
    <h1>Sign up</h1>
    <form action="validateform.php" method="post">
        <div class="inputhandle">
            <label for="name">Username</label>
            <input type="text" name="username" id="name">
        </div>
        <div class="inputhandle">
            <label for="emailaddress">Email</label>
            <input type="text" id="emailaddress" name="email">
        </div>
        <div class="inputhandle">
            <label for="password1">Password</label>
            <input type="password" name="password" id="password1">
        </div>
        <div class="inputhandle">
            <label for="password3">Re-enter password</label>
            <input type="password" name="password2" id="password3">
        </div>
        <div id="submitbutton">
            <div id="submbut">
                <input type="submit" name="signup-button" value="Sign up">
            </div>
            <div id="signuperrors">
                <?php require "errors.php";?>
            </div>
        </div>
    </form>
</div>
</body>
</html>

<?php
require "footer.php";

?>