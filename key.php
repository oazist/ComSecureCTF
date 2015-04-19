<?php
// Start session 
session_start();
// Include required functions file 
require_once('include/loginfunction.inc.php');
// Check login status... if not logged in, redirect to login screen 
if (check_login_status() == false) {
    redirect('login.html');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <style type="text/css">
            @import url("css/base_key.css");
            @import url("css/layout_login.css");
            @import url("css/skeleton.css");
        </style>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Design by Flyer--design.com</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="logo">
            <h1>Computer Security</h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="mainmenus.php" accesskey="1" title="">Home</a></li>
                <li><a href="aboutus.php" accesskey="2" title="">About Us</a></li>
                <li><a href="include/logout.inc.php" accesskey="5" title="">Log out</a></li>
            </ul>
        </div>
        <div id="splash"></div>
        <div id="content">
            <div id="colOne">
                <div>	
                    </br></br></br></br></br></br>
                    <form action="include/checkkey.php" method="GET" >
                        <h2 align="center"> <strong>key </strong></h2><br/>
                        <input type="text" name="key">
                            <br/>
                            <p align="center"> <button  type="submit">Submit</button> </p>
                            <br/>
                    </form>
                </div>

                <div class="key">
                </div>

            </div>
            <div class="boxed"></div>
        </div>
        <div style="clear: both;"></div>

        <div id="footer">
            <div id="footer2">
            </div>
            <p>&nbsp;</p>
        </div>
    </body>
</html>

