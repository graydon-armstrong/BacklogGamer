<!--
Filename: logout.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: Logs the user out of the website
-->

<?php
	// If the user is logged in, delete the session vars to log them out
	session_start();

	if (isset($_SESSION['user_id'])) {
	// End the session
		session_destroy();
	}

	// Redirect to the login page
	header('Location: /assignment4/index.php?rand='.rand());
?>