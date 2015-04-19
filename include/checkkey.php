<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Start session 
session_start();
// Include required functions file 
require_once('include/conf.inc.php');
require_once('include/loginfunction.inc.php');
// Check login status... if not logged in, redirect to login screen 
if (check_login_status() == false) {
    redirect('login.html');
}else{
    $key = $_POST['key'];
    
}
