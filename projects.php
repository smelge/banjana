<?php
	//Projects
	//Login Script Here
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Projects run by Banjana Nursery School">
		<meta name="keywords" content="banjana,gambia,charity,project,playground,meals,garden,women,income,generation,details">
		<meta name="author" content="Tavy Fraser - Laserbird Media">
		<title>Banjana Nursery School</title>

		<!-- Bootstrap -->
		<?php 
			include_once('./includes/dependencies.php');
			$identifier = 'projects';
		?>
	</head>
	<body>
		<div class="container-fluid">
			<!-- Header -->
			<?php include_once('./includes/header.php');?>
			<!-- End Header -->
			<!-- Content -->
			<div class="row pad" style="margin-top:30px;">
				<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
					<div class="round-icon">
						<i class="fa fa-institution fa-4x"></i>						
					</div>
					<span>Projects</span>
				</div>
			</div>
			<div class="row pad">
				<div class="col-sm-12 quotation">
					<?php
						$quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Projects Quote'");
						$quote = mysqli_fetch_array($quote_set);
						echo utf8_encode(nl2br($quote['post_content']));
					?>
				</div>
			</div>
			<hr>
			<!-- Main Body stuff -->
			<a href="./support.php?project=playground" style="color:black;">
				<div class="row pad">
					<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
						<div class="round-icon">
							<i class="fa fa-futbol-o fa-5x"></i>						
						</div>
						<span>Playground Project</span>
					</div>
				</div>
				<div class="row pad">
					<div class="col-sm-12 quotation">
						<?php
							$quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Project - Playground'");
							$quote = mysqli_fetch_array($quote_set);
							echo utf8_encode(nl2br($quote['post_content']));
						?>						  
					</div>
				</div>
			</a>
			<hr>
			<a href="./support.php?project=garden" style="color:black;">
				<div class="row pad">
					<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
						<div class="round-icon">
							<i class="fa fa-pagelines fa-5x"></i>						
						</div>
						<span>Garden Project</span>
					</div>
				</div>
				<div class="row pad">
					<div class="col-sm-12 quotation">
						<?php
							$quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Project - Garden'");
							$quote = mysqli_fetch_array($quote_set);
							echo utf8_encode(nl2br($quote['post_content']));
						?>						
					</div>
				</div>
			</a>
			<hr>
			<a href="./support.php?project=meals" style="color:black;">
				<div class="row pad">
					<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
						<div class="round-icon">
							<i class="fa fa-cutlery fa-5x"></i>						
						</div>
						<span>Healthy Meals</span>
					</div>
				</div>
				<div class="row pad">
					<div class="col-sm-12 quotation">
						<?php
							$quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Project - Meals'");
							$quote = mysqli_fetch_array($quote_set);
							echo utf8_encode(nl2br($quote['post_content']));
						?>						 
					</div>
				</div>
			</a>
			<hr>
			<a href="./support.php?project=womens" style="color:black;">
				<div class="row pad">
					<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
						<div class="round-icon">
							<i class="fa fa-gbp fa-5x"></i>						
						</div>
						<span>Womens Income Generation Project</span>
					</div>
				</div>
				<div class="row pad">
					<div class="col-sm-12 quotation">
						<?php
							$quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Project - Womens'");
							$quote = mysqli_fetch_array($quote_set);
							echo utf8_encode(nl2br($quote['post_content']));
						?>						 
					</div>
				</div>
			</a>
			<hr>
			<!-- End Content -->
			<!-- Footer -->
			<?php include_once('./includes/footer.php');?>
			<!-- End Footer -->
		</div>
	</body>
</html>