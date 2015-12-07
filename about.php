<?php
	//About Us
	//Login Script Here
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Overview of the reasons and details of the Banjana Nursery School">
		<meta name="keywords" content="banjana,gambia,africa,children,nursery,charity,support,about">
		<meta name="author" content="Tavy Fraser - Laserbird Media">
		<title>Banjana Nursery School</title>

		<!-- Bootstrap -->
		<?php include_once('./includes/dependencies.php');?>
		<?php $identifier = 'about';?>
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
						<i class="fa fa-question fa-5x"></i>						
					</div>
					<span>About Us</span>
				</div>
			</div>
			<div class="row pad">
				<div class="col-sm-12 quotation" style="font-size:17px;">
					<?php
						$about_quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'About Us Quote'");
						$about_quote = mysqli_fetch_array($about_quote_set);
						echo utf8_encode(nl2br($about_quote['post_content']));
					?>
				</div>
			</div>
			<hr>
				
			<!-- These are the blockquotes with images -->
			
			<div class="row pad">
				<?php
					$about1_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'attachment' AND `post_title` = 'About 1'");
					$about_1 = mysqli_fetch_array($about1_set);
				?>
				<div class="col-sm-7 quoteleft">
					<?php echo utf8_encode(nl2br($about_1['post_content']));?>
				</div>
				<div class="col-sm-5 imageright">
					<?php
						$about1_image = $about_1['guid'];
						$about1_image = explode("blog/",$about1_image);
						$about1_image = $about1_image[1];
						echo '<img src="./blog/'.$about1_image.'" alt="About 1" class="img-responsive"/>';
					?>
				</div>
			</div>
			<hr>
			<div class="row pad">
				<?php
					$about2_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'attachment' AND `post_title` = 'About 2'");
					$about_2 = mysqli_fetch_array($about2_set);
				?>
				<div class="col-sm-5 imageleft">
					<?php
						$about2_image = $about_2['guid'];
						$about2_image = explode("blog/",$about2_image);
						$about2_image = $about2_image[1];
						echo '<img src="./blog/'.$about2_image.'" alt="About 2" class="img-responsive"/>';
					?>
				</div>
				<div class="col-sm-7 quoteright">
					<?php echo utf8_encode(nl2br($about_2['post_content']));?>
				</div>				
			</div>
			<hr>
			<div class="row pad">
				<?php
					$about3_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'attachment' AND `post_title` = 'About 3'");
					$about_3 = mysqli_fetch_array($about3_set);
				?>
				<div class="col-sm-7 quoteleft">
					<?php echo utf8_encode(nl2br($about_3['post_content']));?>
				</div>
				<div class="col-sm-5 imageright">
					<?php
						$about3_image = $about_3['guid'];
						$about3_image = explode("blog/",$about3_image);
						$about3_image = $about3_image[1];
						echo '<img src="./blog/'.$about3_image.'" alt="About 3" class="img-responsive"/>';
					?>
				</div>
			</div>
			<hr>
			<div class="row pad">
				<?php
					$about4_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'attachment' AND `post_title` = 'About 4'");
					$about_4 = mysqli_fetch_array($about4_set);
				?>
				<div class="col-sm-5 imageleft">
					<?php
						$about4_image = $about_4['guid'];
						$about4_image = explode("blog/",$about4_image);
						$about4_image = $about4_image[1];
						echo '<img src="./blog/'.$about4_image.'" alt="About 4" class="img-responsive"/>';
					?>
				</div>
				<div class="col-sm-7 quoteright">
					<?php echo utf8_encode(nl2br($about_4['post_content']));?>
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