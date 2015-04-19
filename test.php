

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
<style>body{font-size: 0;} h1{font-size: 12px !important;}</style><h1>
 <?php
	/*require_once('include/config.inc');
	$link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD) or die("Could not connect to host");
	mysqli_select_db($link,DB_DATABASE) or die("Could not find database");
	$query="SELECT * FROM user";
	$result = mysqli_query($link,$query) or die("Data not found");
	while($row = mysqli_fetch_array($result)){
		$output =  "USERNAME: ".$row['username']." PASSWORD: ".$row['password']." PRIORITY: ".$row['priority'];
		echo $output;
	}
	*/
	//1
	require_once('include/config.inc');
	echo "Current hostname: ".DB_HOSTNAME;
	//2
	//require_once('include/config.inc');
	echo "Current database username: ".DB_USERNAME;
	//3
	//require_once('include/config.inc');
	echo "Current database password: ".DB_PASSWORD;

	//4
	$link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD) or die("Could not connect to host");
	echo $link->server_info;
	
	//5
	mysqli_select_db($link,DB_DATABASE) or die("Could not find database");

	$query="SELECT username FROM user WHERE username = 'oat'";
	$result = mysqli_query($link,$query) or die("Data not found");
	while($row = mysqli_fetch_array($result)){
		$output = " PRIORITY: ".$row['priority'];
	}
	
	echo $output;

?>

  
 </body>
</html>
