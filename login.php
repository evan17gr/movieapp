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
        top: -28px;
        left: -45px;
        font-size: 19px;
    }
</style>
    <div class="regform">
    <?php
    if (isset($_SESSION["userid"])){
        echo '
            <h1>Log out</h1>
            <form action="logout.php" method="post">
                <div class="inputhandle">
                    <input type="submit" id="login-button" value="Logout">
                </div>
            </form>';
    }
    else{
        echo '
            <h1>Log in</h1>
            <form action="loginhandle.php" method="post">
                <div class="inputhandle">
                    <label for="emailaddress">Email address</label>
                    <input type="text" id="email" name="email1">
                </div>
                <div class="inputhandle">
                    <label for="password1">Password</label>
                    <input type="password" name="password1" id="password1">
                </div>
                <div id="loginbutton">
                    <div id="submbut">
                        <input type="submit" name="login-button" value="Login">
                    </div>
                    <div>
                        <a id="changepass" href="#">Reset password?</a>
                    </div>
                </div>
            </form>
        ';
    }
    ?>
    </div>

<?php
require "footer.php";
?>
