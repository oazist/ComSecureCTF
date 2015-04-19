<?php
// Start session 
session_start();
// Include required functions file 
require_once('include/config.inc.php');
require_once('include/loginfunction.inc.php');
// Check login status... if not logged in, redirect to login screen 
if (check_login_status() == false) {
    redirect('login.html');
} else {
    $uid = $_SESSION['uid'];
    $link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD) or die("Could not connect to host");
    mysqli_select_db($link, DB_DATABASE) or die("Could not find database");
    $query = "SELECT priority FROM user WHERE uid='" . $uid . "'";
    $result = mysqli_query($link, $query) or die("Data not found");
    $output = mysqli_fetch_array($result);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Design by Flyer--design.com</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="css/default.css" rel="stylesheet" type="text/css" />
        <link href="css/layout_blue.css" rel="stylesheet" type="text/css" />
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
            <div id="colOne">
                <div class="content">
                    <div class="container">
                        <div class="form-bg">
                            <form role="form" method="post" action="download.php">
                                <h2>Please provide 4-digits-security pin to verify your identity</h2>
                                <p><input type="text" placeholder="security pin" name="pin"/>
                                    <button class="login" type="submit"></button></p>
                            </form>
                        </div>
                    </div><!-- container -->                    
                </div><br />
            </div>

            <div id="colTwo">
                <div class="content">
                    <h3>Vulnerabilities</h3>
                    <p>A vulnerability is a weakness which allows an attacker to reduce a system's information assurance. 
                        Vulnerability is the intersection of three elements: a system susceptibility or flaw, attacker access 
                        to the flaw, and attacker capability to exploit the flaw. To exploit a vulnerability, an attacker must
                        have at least one applicable tool or technique that can connect to a system weakness. In this frame, 
                        vulnerability is also known as the attack surface.</p>
                    <h3>Vulnerable areas</h3>
                    <p>- Financial systems</p>
                    <p>- Utilities and industrial equipment</p>
                    <p>- Aviation</p>
                    <p>- Consumer devices</p>
                    <p>- Large corporations</p>
                    <p>- Automobiles</p>
                    <p>- Government</p>
                    <p><img src="images/sec2.jpg" alt="" width="190" height="170" /><br />
                    </p>
                </div>
                <div class="boxed"></div>
            </div>
            <div style="clear: both;"></div>
        </div>

        <div id="footer">
            <div id="footer2">

            </div>
            <p>&nbsp;</p>
        </div>
    </body>
</html>
