<?php
	require('./blog/wp-blog-header.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Blog posts and archive for current events at Banjana">
		<meta name="keywords" content="blog,events,archive,banjana,comments,details,charity">
		<meta name="author" content="Tavy Fraser - Laserbird Media">
		<title>Banjana Nursery School</title>

		<!-- Bootstrap -->
		<?php include_once('./includes/dependencies.php');?>
		<?php include_once('./includes/wp_db.php');?>
		<?php $identifier = 'events';?>
	</head>
	<body>
		<div class="container-fluid">
			<!-- Header -->
			<?php include_once('./includes/header.php');?>
			<?php
				// grab modifiers from URL
				$get_post = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
				$displayNo = filter_input(INPUT_GET, 'n', FILTER_SANITIZE_SPECIAL_CHARS);
				
				// Grab archive parameters
				$archive_month = filter_input(INPUT_GET, 'month', FILTER_SANITIZE_SPECIAL_CHARS);
				$archive_year = filter_input(INPUT_GET, 'year', FILTER_SANITIZE_SPECIAL_CHARS);
				
				if ($displayNo == false){
					$start_display = 0;			
				} else {
					$start_display = $displayNo;
				}
				$older = $start_display + 5;
				$newer = $start_display - 5;
			?>			
			<!-- End Header -->
			<!-- Content -->
			<div class="row pad">
				<div class="col-sm-8">
					<?php
						if($get_post == true){
							// Linked so open as single post
							$story_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `id` = '$get_post'");
							$story = mysqli_fetch_array($story_set);
							echo '<div class="row pad">';
								echo '<div class="col-sm-4 blog-date">';																	
									$post_date = date_create($story['post_date']);
									$post_date = date_format($post_date,"jS F Y");
									echo $post_date;
								echo '</div>';
								//echo '<div class="col-sm-7 blog-author">';
								echo '<div class="col-sm-8 blog-author">';
									$author = $story['post_author'];
									$posted_by_set = mysqli_query($banjana,"SELECT * FROM `wp_users` WHERE `ID` = '$author'");
									$posted_by = mysqli_fetch_array($posted_by_set);
									echo $posted_by['user_nicename'];
								echo '</div>';
								/*
								echo '<div class="col-sm-1 blog-comment-no">';
									echo '<span class="disqus-comment-count" data-disqus-identifier="'.$post_id.'"> <!-- Count will be inserted here --> </span>';
									echo '<span><i class="fa fa-comment-o"></i></span>';
								echo '</div>';
								*/
							echo '</div>';
							echo '<div class="row pad">';
								echo '<div class="col-sm-12 blog-head">';
									echo utf8_encode($story['post_title']);
								echo '</div>';
							echo '</div>';
							echo '<div class="row pad">';
								echo '<div class="col-sm-12 blog-body">';
									echo utf8_encode(nl2br($story['post_content']));
								echo '</div>';
							echo '</div>';
							echo '<div class="row pad" style="margin-top:20px;">';
								echo '<div class="col-sm-12" style="text-align:center;">';
									if ($archive_month == true && $archive_year == true){
										echo '<a class="btn btn-default" href="./events.php?month='.$archive_month.'&year='.$archive_year.'">Go Back</a>';
									} else {
										echo '<a class="btn btn-default" href="./events.php?n='.$start_display.'">Go Back</a>';
									}
								echo '</div>';
							echo '</div>';
							echo '<hr>';
							echo '<div class="row pad">';
								echo '<div class="col-sm-12 blog-head" style="text-align:center;">';
									echo 'Comments';
								echo '</div>';
							echo '</div>';
							echo '<hr>';
							echo '<div class="row pad">';
								echo '<div class="col-sm-12 blog-comments">';
									include('./includes/comments.php');					
								echo '</div>';
							echo '</div>';
						} else { //Archives
							
							if ($archive_month == true && $archive_year == true){ // User searched for specific month and year
								$archive_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE MONTH(post_date) = '$archive_month' AND YEAR(post_date) = '$archive_year' AND `post_type` = 'post' AND `post_status` = 'publish' ORDER BY `post_date` DESC");
								while($archive = mysqli_fetch_array($archive_set)){
									$post_id = $archive['ID'];
									echo '<div class="row pad">';
										echo '<div class="col-sm-4 blog-date">';
											$post_date = date_create($archive['post_date']);
											$post_date = date_format($post_date,"jS F Y");
											echo $post_date;
										echo '</div>';
										//echo '<div class="col-sm-7 blog-author">';
										echo '<div class="col-sm-8 blog-author">';
											$author = $archive['post_author'];
											$posted_by_set = mysqli_query($banjana,"SELECT * FROM `wp_users` WHERE `ID` = '$author'");
											$posted_by = mysqli_fetch_array($posted_by_set);
											echo $posted_by['user_nicename'];
										echo '</div>';
										/*
										echo '<div class="col-sm-1 blog-comment-no">';
											echo '<span class="disqus-comment-count" data-disqus-identifier="'.$post_id.'"> <!-- Count will be inserted here --> </span>';
											echo '<span><i class="fa fa-comment-o"></i></span>';
										echo '</div>';
										*/
									echo '</div>';
									echo '<div class="row pad blog-top-area">';
										echo '<div class="col-sm-12 blog-head">';
											echo $archive['post_title'];										
										echo '</div>';
									echo '</div>';
									echo '<div class="row pad blog-area">';
										echo '<div class="col-sm-12">';
											$excerpt = $archive['post_content']; // Load content into variable
											$build_excerpt = explode('. ',$excerpt); // Explode content into sentences
											$excerpt = $build_excerpt[0]; // Get first sentence
											for ($excerpt_loop = 1;$excerpt_loop <= 7;$excerpt_loop++){ // Set up loop
												if ($build_excerpt[$excerpt_loop] == true){ // Check if there is a sentence
													$excerpt = $excerpt . $build_excerpt[$excerpt_loop]; // Add new sentence to last
												} else { // If no sentence
													$excerpt_loop = 8; // End loop
												}
											}											
											$excerpt = $excerpt.'.<br><br>'; // Add breaks to end of excerpt
											echo utf8_encode(nl2br($excerpt)); // Display formatted excerpt								
											echo '<a class="btn btn-default" type="button" href="./events.php?id='.$post_id.'&month='.$archive_month.'&year='.$archive_year.'">';
												echo 'Read this article';
											echo '</a>';
											echo '<br><br>';
										echo '</div>';
									echo '</div>';
								}							
							} else {
								// Standard archive with pagination
								$archive_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'post' AND `post_status` = 'publish' ORDER BY `post_date` DESC LIMIT $start_display,5");
								$archive_num_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_type` = 'post' AND `post_status` = 'publish'");
								$archive_num = mysqli_num_rows($archive_num_set);							
								while($archive = mysqli_fetch_array($archive_set)){
									$post_id = $archive['ID'];
									echo '<div class="row pad">';
										echo '<div class="col-sm-4 blog-date">';
											$post_date = date_create($archive['post_date']);
											$post_date = date_format($post_date,"jS F Y");
											echo $post_date;
										echo '</div>';
										//echo '<div class="col-sm-7 blog-author">';
										echo '<div class="col-sm-8 blog-author">';
											$author = $archive['post_author'];
											$posted_by_set = mysqli_query($banjana,"SELECT * FROM `wp_users` WHERE `ID` = '$author'");
											$posted_by = mysqli_fetch_array($posted_by_set);
											echo $posted_by['user_nicename'];
										echo '</div>';
										/*
										echo '<div class="col-sm-1 blog-comment-no">';
											echo '<span class="disqus-comment-count" data-disqus-identifier="'.$post_id.'"> <!-- Count will be inserted here --> </span>';
											echo '<span><i class="fa fa-comment-o"></i></span>';
										echo '</div>';
										*/
									echo '</div>';
									echo '<div class="row pad blog-top-area">';
										echo '<div class="col-sm-12 blog-head">';
											echo $archive['post_title'];										
										echo '</div>';
									echo '</div>';
									echo '<div class="row pad blog-area">';
										echo '<div class="col-sm-12">';
											$excerpt = $archive['post_content']; // Load content into variable
											$build_excerpt = explode('. ',$excerpt); // Explode content into sentences
											$excerpt = $build_excerpt[0]; // Get first sentence
											for ($excerpt_loop = 1;$excerpt_loop <= 7;$excerpt_loop++){ // Set up loop
												if ($build_excerpt[$excerpt_loop] == true){ // Check if there is a sentence
													$excerpt = $excerpt . $build_excerpt[$excerpt_loop]; // Add new sentence to last
												} else { // If no sentence
													$excerpt_loop = 8; // End loop
												}
											}											
											$excerpt = $excerpt.'.<br><br>'; // Add breaks to end of excerpt
											echo utf8_encode(nl2br($excerpt)); // Display formatted excerpt								
											echo '<a class="btn btn-default" type="button" href="./events.php?id='.$post_id.'&n='.$start_display.'">';
												echo 'Read this article';
											echo '</a>';
											echo '<br><br>';
										echo '</div>';
									echo '</div>';
								}
								echo '<br>';
								echo '<div class="row pad">';
									echo '<div class="col-sm-12">';
										if ($archive_num <= 5){
											echo '<a class="btn btn-default" style="float:left;" disabled="disabled">Older Posts</a>';
										} else {
											echo '<a class="btn btn-default" style="float:left;" href="?n='.$older.'">Older Posts</a>';
										}
										if ($start_display != 0){ 
											echo '<a class="btn btn-default" style="float:right;" href="?n='.$newer.'">Newer Posts</a>';
										} else {
											echo '<a class="btn btn-default" disabled="disabled" style="float:right;">Newer Posts</a>';
										}
									echo '</div>';
								echo '</div>';
							}
						}
					?>
				</div>	
				<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
					<span>Monthly Archive</span>
					<hr>
					<?php include('./includes/sidebar.php');?>
				</div>
			</div>
			<hr>
			<!-- End Content -->
			<!-- Footer -->
			<?php include_once('./includes/footer.php');?>
			<!-- End Footer -->
		</div>
		<script type="text/javascript">
			/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			var disqus_shortname = 'banjananursery'; // required: replace example with your forum shortname			
			var disqus_identifier = '<?php echo $get_post;?>';

			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function () {
			var s = document.createElement('script'); s.async = true;
			s.type = 'text/javascript';
			s.src = '//' + disqus_shortname + '.disqus.com/count.js';
			(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
			}());
		</script> 
	</body>
</html>