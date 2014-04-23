<!--
Filename: check_login_redirect.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: Redirects you to the login page if you arent logged in
-->

<?php
	//start a session
	session_start();

	//see if the user is logged in to the website and if they are not redirect them to a login screen so they cant access this page
	if(!isset($_SESSION['user_id'])) 
	{
		echo '<script type="text/javascript">
			window.location = "/assignment4/login.php"
			</script>';
	}
	else
	{
		$loggedin = true;
	}
?>