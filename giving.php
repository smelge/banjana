<?php
	//Giving
	//Login Script Here
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Details on the different ways you can help Banjana Nursery School">
		<meta name="keywords" content="banjana,gambia,support,child,donation,sponsor,project,charity,giving">
		<meta name="author" content="Tavy Fraser - Laserbird Media">
		<title>Banjana Nursery School</title>

		<!-- Bootstrap -->
		<?php include_once('./includes/dependencies.php');?>
		<?php $identifier = 'giving';?>
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
						<i class="fa fa-gbp fa-5x"></i>						
					</div>
					<span>Giving</span>
				</div>
			</div>
			<div class="row pad">
				<div class="col-sm-12 quotation">
					<?php
						$giving_quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Giving Quote'");
						$giving_quote = mysqli_fetch_array($giving_quote_set);
						echo utf8_encode(nl2br($giving_quote['post_content']));
					?>
				</div>
			</div>
			<hr>
			<!-- Main Body stuff -->
			<div class="row pad">
				<a href="./support.php">
					<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
						<div class="round-icon">
							<i class="fa fa-heart fa-5x"></i>						
						</div>
						<span>Support a Child</span>
					</div>
				</a>
			</div>
			<div class="row pad">
				<div class="col-sm-12 quotation">
					<?php
						$giving_quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Giving - Support a Child'");
						$giving_quote = mysqli_fetch_array($giving_quote_set);
						echo utf8_encode(nl2br($giving_quote['post_content']));
					?>
				</div>
			</div>
			<hr>
			<div class="row pad">
				<a href="#">
					<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
						<div class="round-icon">
							<i class="fa fa-gbp fa-5x"></i>						
						</div>
						<span>Make a Donation</span>
					</div>
				</a>
			</div>
			<div class="row pad">
				<div class="col-sm-12 quotation">
					<?php
						$giving_quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Giving - Make a Donation'");
						$giving_quote = mysqli_fetch_array($giving_quote_set);
						echo utf8_encode(nl2br($giving_quote['post_content']));
					?>
				</div>
			</div>
			<hr>			
			<div class="row pad">
				<a href="./projects.php">
					<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
						<div class="round-icon">
							<i class="fa fa-heartbeat fa-5x"></i>						
						</div>
						<span>Sponsor a Project</span>
					</div>
				</a>
			</div>
			<div class="row pad">
				<div class="col-sm-12 quotation">
					<?php
						$giving_quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Giving - Sponsor a Project'");
						$giving_quote = mysqli_fetch_array($giving_quote_set);
						echo utf8_encode(nl2br($giving_quote['post_content']));
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