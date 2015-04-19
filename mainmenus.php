<?php
// Start session 
session_start();
// Include required functions file 
require_once('include/loginfunction.inc.php');
// Check login status... if not logged in, redirect to login screen 
if (check_login_status() == false) {
    redirect('login.php');
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
                <li><a href="mainmenus.php" accesskey="1" title="">Home</a></li>
                <li><a href="profile.php" accesskey="2" title="">Profile</a></li>
                <li><a href="aboutus.php" accesskey="3" title="">About Us</a></li>
                <li><a href="include/logout.inc.php" accesskey="5" title="">Log out</a></li>
            </ul>
        </div>
        <div id="splash"></div>
        <div id="content">
            <div id="colOne">
                <h2 class="section">Welcome to our website</h2>
                <div class="content">

                    <p>Computer security is <a href="http://en.wikipedia.org/wiki/Security">security</a> applied to computing devices such as <a href="http://en.wikipedia.org/wiki/Computer">computers</a> and <a href="http://en.wikipedia.org/wiki/Smartphone">smartphones</a>, as well as <a href="http://en.wikipedia.org/wiki/Computer_network">computer networks</a> such as private and public networks, including the whole <a href="http://en.wikipedia.org/wiki/Internet">Internet</a> Internet. The field includes all the processes and mechanisms by which digital equipment, information and services are protected from unintended or unauthorized access, change or destruction, and is of growing importance due to the increasing reliance of computer systems 
                        in most societies.[1] It includes <a href="http://en.wikipedia.org/wiki/Physical_security">physical security</a> to prevent theft of equipment and <a href="http://en.wikipedia.org/wiki/Information_security">information security</a>information security to protect the data on that equipment. It is sometimes referred to as "cyber security" or "IT security". Those terms generally do not refer to physical security, but a common belief among computer security experts is that a physical security breach is one of the worst kinds of security breaches as it generally allows full access to both data and equipment.</p></br>
                    <p>Cybersecurity is the process of applying security measures to ensure confidentiality, integrity, and availability of data. Cybersecurity attempts to assure the protection of assets, which includes data, desktops, servers, buildings, and most importantly, humans. The goal of cybersecurity is to protect data both in transit and at rest. Countermeasures can be put in place in order to increase the security of data. Some of these measures include, but are not limited to, access control, awareness training, audit and accountability, risk assessment, penetration testing, vulnerability management, and security assessment and authorization.</p>

                    <ul>
                        <li><a href="include/logout.inc.php">Vulnerabilities</a></li>
                        <li><a href="include/logout.inc.php">Vulnerable areas</a></li>
                        <li><a href="include/logout.inc.php">Financial cost of security breaches</a></li>
                        <li><a href="include/logout.inc.php">Computer protection</a></li>
                        <li><a href="include/logout.inc.php">Notable computer security attacks and breaches</a></li>
                        <li><a href="include/logout.inc.php">Legal issues ang global regulation</a></li>
                        <li><a href="include/logout.inc.php">Government</a></li>
                        <li style="visibility:hidden"><a href="verifyaccount.php">Link to file</a></li>
                    </ul>
                </div><br />
            </div>
            <div id="colTwo">
                <div class="content">
                    <h3>Consumer Devices</h3>
                    <p>Desktop computers and laptops are commonly infected with malware, either to gather passwords or financial account information, or to construct a botnet to attack another target. Smart phones, tablet computers, smart watches, and other mobile devices have also recently become targets for malware</p>
                    <h3>Security Architecture</h3>
                    <ul>
                        <li>The relationship of different components and how they depend on each other</li></br>
                        <li>The determination of controls based on risk assessment, good practice, finances, and legal matters</li></br>
                        <li>The standardization of controls</li></br>
                    </ul>
                    </br>
                    <p><img src="images/infosec.jpg" alt="" width="190" height="120" /><br />
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
