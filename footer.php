<?php

?>
<style>
    .footer{
        background-color: #55d6aa;
        text-align: center;
        position: absolute;
        bottom: 0;
        width: 100%;
        margin: 100px 0px 0px 0px;

    }

    #footerrnav ul{
        margin: 0;
        padding: 0;
        list-style: none;
        display: inline-table;
    }

    #footerrnav li{
        display: inline;
        font-family: Montserrat;
        font-size: 25px;
        display: inline-block;
        padding: 25px 0px 15px 50px;

    }

    #footerrnav a{
        text-decoration: none;
        color: #666666;
    }

    #footerrnav a:hover{
        color: black;
    }

    #logo2{
        float-left;
        width:60px;
        height: 50px;
        margin-left: 20px;
        display: inline-block;
        position: relative;
        top: 7px;

    }

    #footernav2{
        position: absolute;
        width: 100%;
        height: 3rem;
        background-color: black;
        padding-bottom: 15px;
    }


    h4{
        color: white;
    }

    #footerrnav{
        height:6rem;
    }

    #footerrnav li a::before{
        content: '';
        display: block;
        height: 5px;
        width: 100%;
        background-color: #666666;
        position: relative;
        top: 35px;
        width: 0%;
        right:0px;
        transition: all ease-in-out 250ms;

    }

    #footerrnav a:hover::before{
        width: 100%;
        right:-50px;
        width:50%;
    }

</style>
<div class="footer">
    <div id="footerdiv1">
        <footer>
            <nav id="footerrnav">
                <ul>
                    <li><img id="logo2" src="https://image.flaticon.com/icons/png/512/83/83519.png"></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Log In</a></li>
                    <li><a href="#">Account</a></li>
                </ul>
            </nav>
        </footer>
    </div>
    <div id="footernav2">
        <h4>&copy; Copyright by Evan Kalvis</h4>
    </div>
</div>

?>