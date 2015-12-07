<?php
	require('./blog/wp-blog-header.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Banjana Nursery School Homepage">
		<meta name="keywords" content="banjana,gambia,charity,home,about,donation,sponsor,contact,details,introduction">
		<meta name="author" content="Tavy Fraser - Laserbird Media">
		<title>Banjana Nursery School</title>

		<!-- Bootstrap -->
		<?php include_once('./includes/dependencies.php');?>
		<?php $identifier = 'index';?>
		<script src="js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
		<script src="js/jquery.kinetic.min.js" type="text/javascript"></script>
		<script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>
		<script src="./js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>		
		<?php
			$youtube_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Index Quote'");
			$youtube = mysqli_fetch_array($youtube_set);
		?>
	</head>
	<body>
		<div class="container-fluid">
			<!-- Header -->
			<?php include('./includes/header.php');?>
			<!-- End Header -->
			<!-- Content -->
			<?php include('./includes/carousel.php');?>
			<div class="row pad">
				<a href="./about.php">
					<div class="col-sm-3 icon-zone">
						<div class="round-icon">
							<i class="fa fa-question fa-5x"></i>						
						</div>
						<span>About Us</span>
					</div>
				</a>
				<a href="./giving.php">
					<div class="col-sm-3 icon-zone">
						<div class="round-icon">
							<i class="fa fa-gbp fa-5x"></i>
						</div>
						<span>Make a Donation</span>
					</div>
				</a>
				<a href="./support.php">
					<div class="col-sm-3 icon-zone">
						<div class="round-icon">
							<i class="fa fa-child fa-5x"></i>
						</div>
						<span>Sponsor a Child</span>
					</div>
				</a>
				<a href="./contact.php">
					<div class="col-sm-3 icon-zone">
						<div class="round-icon">
							<i class="fa fa-envelope-o fa-5x"></i>
						</div>
						<span>Contact Us</span>
					</div>
				</a>
			</div>
			<hr>
			<div class="row pad">
				<div class="col-sm-12 quotation">
					<?php
						$index_quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Index Quote'");
						$index_quote = mysqli_fetch_array($index_quote_set);
						echo utf8_encode(nl2br($index_quote['post_content']));
					?>
				</div>
			</div>
			<hr>
<!--
			<div class="row pad">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe style="min-width:360px;border:2px solid black;" class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $youtube;?>" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<hr>
-->
			<div class="row pad" style="padding:0 15px;">
				<div class="col-sm-4 imageblock">					
					<a href="./events.php?id=143">
						<?php
							$block_image_1_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'attachment' AND `post_title` = 'Index Block Image 1'");
							$block_image_1 = mysqli_fetch_array($block_image_1_set);
							echo '<img src="'.$block_image_1['guid'].'" alt="Image 1" class="img-responsive"/>';
							echo '<div class="imageblock-caption">';
								echo utf8_encode(nl2br($block_image_1['post_content']));
							echo '</div>';
						?>
					</a>
				</div>				
				<div class="col-sm-4 imageblock">
					<a href="./events.php?id=145">
						<?php
							$block_image_2_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'attachment' AND `post_title` = 'Index Block Image 2'");
							$block_image_2 = mysqli_fetch_array($block_image_2_set);
							echo '<img src="'.$block_image_2['guid'].'" alt="Image 2" class="img-responsive"/>';
							echo '<div class="imageblock-caption">';
								echo utf8_encode(nl2br($block_image_2['post_content']));
							echo '</div>';
						?>
					</a>
				</div>
				<div class="col-sm-4 imageblock">
					<a href="./events.php?id=147">
						<?php
							$block_image_3_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'attachment' AND `post_title` = 'Index Block Image 3'");
							$block_image_3 = mysqli_fetch_array($block_image_3_set);
							echo '<img src="'.$block_image_3['guid'].'" alt="Image 3" class="img-responsive"/>';
							echo '<div class="imageblock-caption">';
								echo utf8_encode(nl2br($block_image_3['post_content']));
							echo '</div>';
						?>
					</a>
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