<?php
session_start();
?>

<head>
    <style>
        body{
            background-color: black;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url("https://wallpapercave.com/wp/RKyfEEh.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            opacity: 1;
            width: 100%;
            height: 100%;
            min-height: 100%;
            display: table;
        }



        #logo{
            float-left;
            width:60px;
            height: 50px;
            margin-left: 20px;
            display: inline;

        }

        #logoname{
            display: inline;
            font-size: 28px;
        }

        #header{
            background-color: #55d6aa;

        }

        #header::after{
            content: '';
            display: table;
            clear: both;
        }

        #headernav{
            float: right;
        }

        #headernav ul{
            margin: 0;
            padding: 0;
            list-style: none;
            margin-right: 40px;

        }

        #headernav li{
            display:inline-block ;
            margin-left: 40px;
            font-size: 18px;
            font-family: Montserrat;
            margin-top: 20px;
            margin-right: 30px;
            position: relative;
        }

        #headernav a {
            color: #666666;
            text-decoration: none;
            text-transform: uppercase;
        }

        #headernav a:hover{
            color: #000;
        }

        #headernav a:hover::before{
            font-weight: 400;
            width: 100%;
        }

        #headernav a::before{
            content: '';
            display: block;
            height: 5px;
            width: 100%;
            background-color: #666666;
            position: absolute;
            top: -19px;
            width: 0%;
            transition: all ease-in-out 250ms;
        }

    </style>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <header id="header">
        <div id="headercontainer">
            <img id="logo" src="https://image.flaticon.com/icons/png/512/83/83519.png">
            <h1 id="logoname">Cinevid</h1>
            <nav id="headernav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Log In</a></li>
                    <li><a href="#">Account</a></li>
                </ul>
            </nav>
        </header>
    <div>
</body>
