<div class="row pad">
	<?php
		$get_image_id = mysqli_query($banjana,"SELECT * FROM `wp_term_relationships` WHERE `term_taxonomy_id` = 2");
	?>
	<div class="col-sm-12 pad">
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<?php
					$slider_loop = 0;
					while ($image_id = mysqli_fetch_array($get_image_id)){
						$use_id = $image_id['object_id'];
						$get_image_info = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `ID` = '$use_id'");
						$image_info = mysqli_fetch_array($get_image_info);
						
						$short_img = explode("blog/",$image_info['guid']);
						$short_img = $short_img[1];
						
						if ($slider_loop == 0){
							$slider_param = 'item active';
						} else {
							$slider_param = 'item';
						}
						
						echo '<div class="'.$slider_param.'">';
							echo '<img src="./blog/'.$short_img.'" alt="'.$image_info['post_content'].'">';
							if ($image_info['post_content'] == true){
								echo '<div class="carousel-caption">';
									echo '<h3>'.$image_info['post_content'].'</h3>';
								echo '</div>';
							}
						echo '</div>';
						$slider_loop++;
					}
				?>
			</div>
		</div>
	</div>
	<?php include('./includes/ticker.php');?>
</div>