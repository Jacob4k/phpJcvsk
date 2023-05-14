<?php
session_start();

    $_SESSION;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="gwapo.png"
    type="image/x-icon">
</head>
<body>
    <header>
        <div class="log"><img src="gwapo.png"/></div>

        <div class="menu">
            <ul>
                <li><a href="#first">HOME</a></li>
                <li><a href="#second">PROJECTS</a></li>
                <li><a href="#third">CONTACT US</a></li>
                <li><a href="#fourth">SERVICES</a></li>
            </ul>
        </div>

        <div class="about" id="first">
            <p>HI, I am Jacob</p>
        </div>

        <div class="im">
            <p>WEB DEVELOPER </p>
        </div>

        <div class="me">
            <p>ABOUT ME</p>
        </div>

        <div class="aboutme">
            <p> lorem ipsumlorem ipsumlorem </p>
            <p> lorem ipsumlorem ipsumlorem </p>
            <p> lorem ipsumlorem ipsumlorem </p>
            <p> lorem ipsumlorem ipsumlorem </p>
        </div>
</header>
    <header class="sec1">
        <div class="project" id="second">
            <p>PROJECTS</p>
        </div>

        <div class="pro">
            <p>NO PROJECTS AVAILABLE</p>
        </div>
    </header>

    <header class="sec2" id="third">
        <div class="contact">
            <p>CONTACT US</p>
        </div>

        <div class="con">
            <p>Gmail: jacobsuitosyt@gmail.com</p>
        </div>

        <div class="con">
            <p>facebook: Oxy Jvck's ---<a href="https://www.facebook.com/profile.php?id=100085191844546">click here to visit</a></p>
        </div>

        <div class="con">
            <p>location: Omod Maninihon Bayawan City</p>
        </div>
    </header>

<header class="sec3" id="fourth">
        <div class="services">
            <p>SERVICES</p>
        </div>

        <div class="serv">
            <p>I CAN CODE</p>
            </div>

            <div class="serv1">
                <p>I CAN LOVE YOU</p>
            </div>

            <div class="serv2">
                <p>I CAN SEE YOUR BEAUTIFUL FACE</p>
            </div>
        </header>

        <div class="login">
            <p><a href="login.php">LOG IN WITH FACEBOOK</a></p>
        </div>

    </header>
</body>
</html>