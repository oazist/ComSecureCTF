<?php
/*
	This is a login script. The script we create during this step will be executed after
	we submit a username and password via the login screen. Several key concepts will be illustrated in this step:
	1. Sanitizing data (Making sure of the database security)
	2. Simple MySQL queries using the object-oriented MySQLi extension
	3. Use of $_SESSION variable to check login status and passing parameters
*/

require_once('config.inc.php');
require_once('loginfunction.inc.php');
// Start session 
session_start(); 
// Check if user is already logged in 
if ($_SESSION['logged_in'] == true) { 
	// If user is already logged in, redirect to main page 
	redirect('../mainmenus.php'); 
}else{ 
	// Make sure that user submitted a username/password and username only consists of alphanumeric chars 
	if ((!isset($_POST['username'])) || (!isset($_POST['password'])) OR (!ctype_alnum($_POST['username']))) { 
		redirect('../login.php'); 
	} 

	// Connect to database 
	$mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE); 

	// Check connection 
	if (mysqli_connect_errno()) { 
		printf("Unable to connect to database: %s", mysqli_connect_error()); 
		exit(); 
	}
	// Escape any unsafe characters before querying database 
	/*$username = $mysqli->real_escape_string($_POST['username']); 
	$password = $mysqli->real_escape_string($_POST['password']);*/
	
	$username = $_POST['username']; 
	$password = $_POST['password'];

	// Construct SQL statement for query & execute 

	$sql = "SELECT * FROM user WHERE username = '" . $username . "' AND password = '" . $password . "'"; 

	$result = $mysqli->query($sql); 
	// If one row is returned, username and password are valid 

	if (is_object($result) && $result->num_rows == 1) { 
		// Set session variable for login status to true
		$_SESSION['username'] = $username;

		$row = mysqli_fetch_array($result);
		$_SESSION['uid'] = $row['uid'];

		$_SESSION['logged_in'] = true; 
		redirect('../mainmenus.php'); 
	}else{ 
	// If number of rows returned is not one, redirect back to login screen 
	redirect('../login.php'); 
	} 

} 

?>