<?php
// Start session 
session_start();
// Include required functions file 
require_once('include/loginfunction.inc.php');
// Check login status... if not logged in, redirect to login screen 
if (check_login_status() == false) {
    redirect('login.html');
}else{
    if($_POST['key']=='3102' && !empty($_POST['key'])){
        redirect('include/pdf.php');
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <style type="text/css">
            @import url("css/base_key.css");
            @import url("css/layout_blue.css");
            @import url("css/skeleton.css");
        </style>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Design by Flyer--design.com</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="css/default_key.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="logo">
            <h1>Computer Security</h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="mainmenus.php" accesskey="1" title="">Home</a></li>
                <li><a href="profile.php" accesskey="2" title="">Profile</a></li>
                <li><a href="aboutus.php" accesskey="3" title="">About Us</a></li>
                <li><a href="include/logout.inc.php" accesskey="5" title="">Log out</a></li>
            </ul>
        </div>
        <div id="splash"></div>
        <div id="content">

            <div>	
                <form action="key.php" method="POST" >
                    <br/><br/><br/>
                    <h1 align-text="center"> <strong>key </strong></h1>
                    </br>
                    <input type="text" name="key">
                        <br/>
                        <p align="center"> <button  type="submit">Submit</button> </p>
                        <br/>
                </form>
            </div>
        </div>

        <div id="footer">
            <div id="footer2">
            </div>
            <p>&nbsp;</p>
        </div>
    </body>
</html>

