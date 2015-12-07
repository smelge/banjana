<?php
	//Support Page
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Forms for supporting various aspects of Banjana Nursery">
		<meta name="keywords" content="banjana,support,donation,child,project,gambia,meals,playground,money,garden">
		<meta name="author" content="Tavy Fraser - Laserbird Media">
		<title>Banjana Nursery School</title>

		<!-- Bootstrap -->
		<?php 
			include_once('./includes/dependencies.php');
			$project = filter_input(INPUT_GET, 'project', FILTER_SANITIZE_SPECIAL_CHARS);
			$identifier = 'support';
		?>
	</head>
	<body>
		<div class="container-fluid">
			<!-- Header -->
			<?php include_once('./includes/header.php');?>
			<!-- End Header -->
			<!-- Content -->
			<?php if($project == false){?>
				<div class="row pad" style="margin-top:30px;">
					<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
						<div class="round-icon">
							<i class="fa fa-institution fa-4x"></i>						
						</div>
						<span>Support a Child</span>
					</div>
				</div>
				<div class="row pad">
					<div class="col-sm-12 quotation">
						<?php
							$quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = 'Support a Child Quote'");
							$quote = mysqli_fetch_array($quote_set);
							echo utf8_encode(nl2br($quote['post_content']));
						?>
					</div>
				</div>
				<hr>
				<div class="row pad" style="margin-top:30px;">
					<a href="./forms/banjana_forms.pdf" download target="_blank">
						<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
							<div class="round-icon">
								<i class="fa fa-print fa-4x"></i>						
							</div>
							<span>Print Support Form Here</span>
						</div>
					</a>
				</div>
				<hr>
				<div class="row pad" style="margin-top:30px;">
					<div class="col-sm-12 full-image">
						<?php
							$image_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'attachment' AND `post_title` = 'Support Image'");
							$image = mysqli_fetch_array($image_set);
							echo '<img src="'.$image['guid'].'" alt="Big Image" class="img-responsive"/>';							
						?>						
					</div>
				</div>
				<hr>
			<?php } else { ?>
				<?php
					switch($project){
						case 'playground':
							$title = 'Playground Project';
							$icon = 'fa-futbol-o';
							$image = './assets/playground2.jpg';
							$alt_image = 'Alt text';
							break;
						case 'garden':
							$title = 'Garden Project';
							$icon = 'fa-pagelines';
							$image = './assets/Garden-Image.jpg';
							$alt_image = 'Alt text';
							break;
						case 'meals':
							$title = 'Healthy Meals';
							$icon = 'fa-cutlery';
							$image = './assets/Healthy-Image.jpg';
							$alt_image = 'Alt text';
							break;
						case 'womens':
							$title = 'Womens Income Generation Project';
							$icon = 'fa-gbp';
							$image = './assets/Women-Image.jpg';
							$alt_image = 'Alt text';
							break;
					}
				?>
				<div class="row pad" style="margin-top:30px;">
					<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
						<div class="round-icon">
							<i class="fa <?php echo $icon;?> fa-5x"></i>						
						</div>
						<span><?php echo $title;?></span>
					</div>
				</div>
				<div class="row pad">
					<div class="col-sm-12 quotation">
						<?php
							$quote_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'page' AND `post_title` = '$title'");
							$quote = mysqli_fetch_array($quote_set);
							echo utf8_encode(nl2br($quote['post_content']));
						?>
					</div>
					<hr>
					<div class="row pad" style="margin-top:30px;">
						<a href="./forms/banjana_forms.pdf" download target="_blank">
							<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
								<div class="round-icon">
									<i class="fa fa-print fa-4x"></i>						
								</div>
								<span>Print Support Form Here</span>
							</div>
						</a>
					</div>
					<hr>
					<div class="row pad" style="margin-top:30px;">
						<div class="col-sm-12 full-image">
							<img src="<?php echo $image;?>" alt="<?php echo $alt_image;?>" class="img-responsive"/>
						</div>
					</div>
					<hr>
			<?php } ?>
			<!-- End Content -->
			<!-- Footer -->
			<?php include_once('./includes/footer.php');?>
			<!-- End Footer -->
		</div>
	</body>
</html>