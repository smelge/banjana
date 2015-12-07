<div class="row pad">
	<?php
		// select random quote
		$get_rnd_id = mysqli_query($banjana,"SELECT `object_id` FROM `wp_term_relationships` WHERE `term_taxonomy_id` = 4 ORDER BY RAND() LIMIT 0,1");
		$rnd_id = mysqli_fetch_array($get_rnd_id);
		
		$random_volunteer = $rnd_id['object_id'];
		
		$get_vol_id = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `ID` = '$random_volunteer'");
		$vol_id = mysqli_fetch_array($get_vol_id);
		
		$vol_img = explode("blog/",$vol_id['guid']);
		$vol_img = $vol_img[1];
	/*	
		echo '<div class="col-sm-3 quoteimage">';
			echo '<img src="./blog/'.$vol_img.'" alt="'.$vol_id['post_title'].'">';
		echo '</div>';
		echo '<div class="col-sm-9">';
			echo '<div class="bubble">';
				echo utf8_encode(nl2br($vol_id['post_content']));
			echo '</div>';
		echo '</div>';
		*/
		
		echo '<div class="col-sm-12">';
			echo '<div class="media" style="margin-left:15px;">';
				echo '<div class="media-left">';
					echo '<img style="border-radius:10px;height:150px;"class="media-object" src="./blog/'.$vol_img.'" alt="'.$vol_id['post_title'].'">';
				echo '</div>';
				echo '<div class="media-body">';	
					echo '<div class="bubble">';
						echo utf8_encode(nl2br($vol_id['post_content']));
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	?>
</div>
<div class="row pad">
	<div class="col-sm-12 soc-med">
		<div class="socmed">
			<a href="https://www.facebook.com/banjana.nursery" target="_blank">
				<span class="fa-stack fa-lg fa-3x">
					<i class="fa fa-square-o fa-stack-2x"></i>
					<i class="fa fa-facebook fa-stack-1x"></i>
				</span>
			</a>
			<a href="https://twitter.com/banjananursery" target="_blank">
				<span class="fa-stack fa-lg fa-3x">
					<i class="fa fa-square-o fa-stack-2x"></i>
					<i class="fa fa-twitter fa-stack-1x"></i>
				</span>
			</a>
			<a href="https://www.linkedin.com/pub/banjana-nursery/103/388/751" target="_blank">
				<span class="fa-stack fa-lg fa-3x">
					<i class="fa fa-square-o fa-stack-2x"></i>
					<i class="fa fa-linkedin fa-stack-1x"></i>
				</span>
			</a>
			<a href="https://www.justgiving.com/banjananursery/" target="_blank">
				<img src="./assets/justgiving.gif" alt="Justgiving Logo"/>
			</a>
		</div>
	</div>
</div>
<div class="row pad">
	<div class="footsection">
		Site and Contents &copy Banjana Nursery School - <?php echo date("Y");?><br>
		Built by <a href="http://www.laserbirdmedia.com" style="text-decoration:none;font-weight:bold;color:black;">Laserbird Media</a><br>
	</div>
</div>