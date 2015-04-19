<?php
// Start session 
session_start();
// Include required functions file
require_once('include/config.inc.php');
require_once('include/loginfunction.inc.php');
// Check login status... if not logged in, redirect to login screen 
if (check_login_status() == false) {
    redirect('login.html');
}else{
    $pin = $_POST['pin'];
    $uid = $_SESSION['uid'];
    $link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD) or die("Could not connect to host");
    mysqli_select_db($link, DB_DATABASE) or die("Could not find database");
    $query = "SELECT pin FROM user WHERE uid='" . $uid . "'";
    $result = mysqli_query($link, $query) or die("Data not found");
    $output = mysqli_fetch_array($result);
    if($output['pin'] != $pin){
        redirect('verifyaccount.php');
    }
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
        </head>
        <body>
            <div id="logo">
                <h1>Computer Security</h1>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="mainmenu.php" accesskey="1" title="">Home</a></li>
                <li><a href="profile.php" accesskey="2" title="">Profile</a></li>
                <li><a href="aboutus.php" accesskey="3" title="">About Us</a></li>
                <li><a href="include/logout.inc.php" accesskey="5" title="">Log out</a></li>
                </ul>
            </div>
            <div id="splash"></div>
            <div id="content">
                <div id="colOne">
                    <div class="content">
                        <div onClick="window.location = 'include/pdf.php'">	
                            </br></br></br></br>
                            <p align="center"><img  src="images/download_button.jpg" alt="" width="200" height="100" </p>
                        </div>


                        <div>	
                            </br></br></br></br></br></br>
                            <p align="center"> If you got the key, Please click the picture below. </p>


                        </div>

                        <div onClick="window.location = 'key.php'">	
                            <p align="center"><img  src="images/keybutton.png" alt="" width="260" height="255" </p>
                        </div>
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
