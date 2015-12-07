<?php
	require('./blog/wp-blog-header.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Banjana Nursery School</title>

		<!-- Bootstrap -->
		<?php 
			include_once('./includes/dependencies.php');
		?>
	</head>
	<body>
		<div class="container-fluid">
			<!-- Header -->
			<?php include_once('./includes/header.php');?>
			<!-- End Header -->
			<!-- Content -->
			<div class="row pad" style="margin-top:20px;">
				<div class="col-sm-12" style="text-align:center;">
					<?php
						if(is_user_logged_in()){
							echo '<a class="btn btn-default" href="'.wp_logout().'">Log Out</a>';
						} else {
							echo '<a class="btn btn-default" href="'.wp_login_url('./wp-admin/').'">Log In</a>';
						}
					?>
				</div>
			</div>
			<hr>
			<!-- End Content -->
			<!-- Footer -->
			<?php include_once('./includes/footer.php');?>
			<!-- End Footer -->
		</div>
	</body>
</html>