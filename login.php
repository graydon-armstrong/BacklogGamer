<!--
Filename: index.php
Authors name: Graydon Armstrong
Website name: Backlog Gamer
File Description: The admin login page. So you are able to add, edit, and delete blog entries
-->
<?php include('php/check_login.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

	<?php include('head.php'); ?>
	
	<body>

	<?php include('header.php'); ?>
	
	<div class="row" id= "main_layout">
		<div class="large-12 columns">
		
		<?php 
			//page variables
			$pagetitle = "Admin Login";					
			include('php/page_title.php');
		?>

		<div class="row" id="content">
			<div class="large-12 columns">
				
				<form method="post" action="#">
					<div>
						<label>Username</label></br>
						<input name="username" maxlength="16" />
					</div>
					<div>
						<label>Password</label></br>
						<input name="password" type="password" maxlength="16" />
					</div>
					<input type="submit" value="Submit" />
				</form>

			</div>
		</div>

		
		
		</div>
	</div>

	<?php include('footer.php') ?>
	
	<script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
	

	</body>

</html>