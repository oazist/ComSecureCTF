<?php

// Start session 
session_start();
// Include required functions file 
require_once('include/conf.inc.php');
require_once('include/loginfunction.inc.php');
// Check login status... if not logged in, redirect to login screen 
if (check_login_status() == false) {
    redirect('login.html');
} else {
    $uid = $_SESSION['uid'];
    $link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD) or die("Could not connect to host");
    mysqli_select_db($link, DB_DATABASE) or die("Could not find database");
    $query = "SELECT * FROM user WHERE uid='" . $uid . "'";
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
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .btn-social {
                color: white;
                opacity: 0.8;
            }

            .btn-social:hover {
                color: white;
                opacity: 1;
                text-decoration: none;
            }

            .btn-facebook {
                background-color: #3b5998;
            }

            .btn-twitter {
                background-color: #00aced;
            }

            .btn-linkedin {
                background-color: #0e76a8;
            }

            .btn-google {
                background-color: #c32f10;
            }
        </style>
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
            <div class="container">
                <section style="padding-bottom: 50px; padding-top: 50px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="assets/img/250x250.png" class="img-rounded img-responsive" />
                            <br />
                            <br />
                            <label>Registered Username</label>
                            <input type="text" class="form-control" placeholder="Demouser">
                                <label>Registered Name</label>
                                <input type="text" class="form-control" placeholder="Jhon Deo">
                                    <label>Registered Email</label>
                                    <input type="text" class="form-control" placeholder="jnondeao@gmail.com">
                                        <br/>
                                        <a href="#" class="btn btn-success">Update Details</a>
                                        <br/><br/>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="alert alert-info">
                                                <h2>User Bio : </h2>
                                                <h4>Bootstrap user profile template </h4>
                                                <p>
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                                </p>
                                            </div>
                                            <div >
                                                <a href="#" class="btn btn-social btn-facebook">
                                                    <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                                                <a href="#" class="btn btn-social btn-google">
                                                    <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                                                <a href="#" class="btn btn-social btn-twitter">
                                                    <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                                                <a href="#" class="btn btn-social btn-linkedin">
                                                    <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <h3>Change YOur Password</h3>
                                                <br/>
                                                <label>Enter Old Password</label>
                                                <input type="password" class="form-control">
                                                    <label>Enter New Password</label>
                                                    <input type="password" class="form-control">
                                                        <label>Confirm New Password</label>
                                                        <input type="password" class="form-control" />
                                                        <br>
                                                            <a href="#" class="btn btn-warning">Change Password</a>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            <!-- ROW END -->


                                                            </section>
                                                            <!-- SECTION END -->
                                                            </div>
                                                            <!-- CONATINER END -->

                                                            <div style="clear: both;"></div>
                                                            </div>

                                                            <div id="footer">
                                                                <div id="footer2">

                                                                </div>
                                                                <p>&nbsp;</p>
                                                            </div>
                                                            </body>
                                                            </html>

