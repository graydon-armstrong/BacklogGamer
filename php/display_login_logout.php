<!--
Filename: display_login_logout.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: Check for login and shows a login or logout button in the top right of the site
-->

<?php 
	if($loggedin==false) 
	{
		echo('<a href="login.php" style="float:right;" class="button">Login</a>');
	}
	else
	{
		echo('<a href="php/logout.php" style="float:right;" class="button">'.$_SESSION['username'].': Logout</a>');
	}
?>