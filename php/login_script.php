<?php
	//put the posted user name and password into variables
	$username = $_POST['username'];
	$password = $_POST['password'];
	//a variable to check the form data
	$formOK = true;
	
	//make sure username is entered
	if (empty($username)) {
		echo 'Username is required</br>';
		$formOK = false;
	}

	//Check for password value
	if (empty($password)) {
		echo 'Password is required</br>';
		$formOK = false;
	}

	//if form data is ok
	if($formOK == true){
	
		//connect to the database and see if there is a username and password combination that matches
		include('php/mysql_connection_string.php');
		$sql = "SELECT id FROM admins WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn, $sql) or die('Error querying database.');
		$count = mysqli_num_rows($result);

		//if the count is one log the user in by storing their user id in a session variable and redirect to the business contacts page
		if ($count == 1) {
			$row = mysqli_fetch_array($result);
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['username'] = $username;
			mysqli_close($conn);
			echo '<script type="text/javascript">
				window.location = "index.php?rand='.rand().'"
				</script>';
		} else {
			//if they were not in the database show a message and a link to go back to the form
			echo 'Username or Password was incorrect.</br>';
			echo 'Click <a href="javascript:history.go(-1)">HERE</a> to go back and adjust your entry.';
			mysqli_close($conn);
		}
		
	} else {
		echo 'Click <a href="javascript:history.go(-1)">HERE</a> to go back and adjust your entry.';
	}
?>