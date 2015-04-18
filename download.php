<?php
// Start session 
session_start();
// Include required functions file 
require_once('include/config.inc.php');
require_once('include/loginfunction.inc.php');
// Check login status... if not logged in, redirect to login screen 
if (check_login_status() == false) {
    redirect('login.php');
} else {
    $uid = $_SESSION['uid'];
    $link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD) or die("Could not connect to host");
    mysqli_select_db($link, DB_DATABASE) or die("Could not find database");
    $query = "SELECT priority FROM user WHERE uid='" . $uid . "'";
    $result = mysqli_query($link, $query) or die("Data not found");
    
    $output = mysqli_fetch_array($result);
    echo "your priority is ".$output['priority'];
    
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
                <li><a href="index.php" accesskey="1" title="">Home</a></li>
                <li><a href="aboutus.php" accesskey="2" title="">About Us</a></li
                <li><a href="include/logout.inc.php" accesskey="5" title="">Log out</a></li>
            </ul>
        </div>
        <div id="splash"></div>
        <div id="content">
            <?php if ($output['priority'] > 1) { ?>
                <div class="content">
                    <div onClick="window.location = 'include/pdf.php'">	
                        </br></br></br></br>
                        <p align="center"><img  src="images/download_button.jpg" alt="" width="200" height="100" </p>
                    </div>


                    <div>	
                        </br></br></br></br></br></br>
                        <p align="center"> If you got the key. Please click picture. </p>
                    </div>

                    <div onClick="window.location = 'key.php'">	
                        <p align="center"><img  src="images/keybutton.png" alt="" width="260" height="255" </p>
                    </div>
                </div><br />
                <div style="clear: both;"></div>
            <?php }else{ ?>
                <div class="content">
                    <h1>Sorry, your account does not have a privilege to download this file.</h1>
                </div>
            <?php } ?>
        </div>

        <div id="footer">
            <div id="footer2">

            </div>
            <p>&nbsp;</p>
        </div>
    </body>
</html>
