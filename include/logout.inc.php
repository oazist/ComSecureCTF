<?php 

	// Start session 

	session_start(); 

	// Include required functions file 

	require_once('loginfunction.inc.php'); 

	// If not logged in, redirect to login screen 
	// If logged in, unset session variable and display logged-out message 
	if (check_login_status() == false) { 
	 // Redirect to 
	 redirect('../login.html'); 
	}else{ 
	 // Kill session variables 
	 unset($_SESSION['logged_in']); 
	 unset($_SESSION['username']); 
	 // Destroy session 
	 session_destroy(); 
	}

?> 

<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body>
    <p>You have successfully logged out</p>
	<p><a href="../login.html">Click Here</a> if you want to log in again</p>
</body>

</html>