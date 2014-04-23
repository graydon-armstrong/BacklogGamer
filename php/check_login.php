<!--
Filename: check_login.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: Sets a logged in variable if you are logged in
-->

<?php
	//start a session
	session_start();

	//see if the user is logged in to the website and if they are not redirect them to a login screen so they cant access this page
	if(!isset($_SESSION['user_id'])) {
		$loggedin = false;
	}
	else
	{
		$loggedin = true;
	}
?>