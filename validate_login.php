<!--
Filename: validate_login.php
Authors name: Graydon Armstrong
Website name: Backlog Gamer
File Description: The page to validate the admin login credentials and echo any errors
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
			$pagetitle = "Home Page";					
			include('php/page_title.php');
		?>

		<div class="row" id="content">
			<div class="large-12 columns">
				
				<?php include('php/login_script.php') ?>

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