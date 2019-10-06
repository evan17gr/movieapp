<?php
require "header.php";
?>

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

    #changepass{
        color: rgb(85, 214, 170);
        float: right;
        position: relative;
        top: -25px;
        left: -45px;
        font-size: 19px;
    }
</style>
<div class="regform">
    <h1>Log in</h1>
    <form action="validateform.php" method="post">
        <div class="inputhandle">
            <label for="emailaddress">Email</label>
            <input type="text" id="emailaddress" name="email">
        </div>
        <div class="inputhandle">
            <label for="password1">Password</label>
            <input type="password" name="password" id="password1">
        </div>
        <div id="loginbutton">
            <div id="submbut">
                <input type="submit" name="login-button" value="Login">
            </div>
            <div>
                <a id="changepass" href="sendemail.php">Reset your password?</a>
            </div>
        </div>
    </form>
</div>


<?php
if (isset($_POST["login-button"])){

}
else{
    header("Location: signup.php");
    exit();
}
?>
<?php
require "footer.php";
?>