<?php
	/*
	redirected user to a specific page.
	*/
	function redirect($page){
		header('Location: '.$page);
		exit();
	}

	/*Check login status*/
	function check_login_status(){
		//if $_SESSION['logged_in'] still alive, this function will notify the invoker about status of $_SESSION.
		if(isset($_SESSION['logged_in'])){
			return $_SESSION['logged_in'];
		}
		return false;
	}
?>