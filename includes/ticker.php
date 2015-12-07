<script type="text/javascript">
	$(document).ready(function () {
		$("#scrollingText").smoothDivScroll({
			autoScrollingMode: "always",
			autoScrollingDirection: "endlessLoopRight",
			autoScrollingStep: 1,
			autoScrollingInterval: 15 
		});

		$("#scrollingText").bind("mouseover", function () {
			$("#scrollingText").smoothDivScroll("stopAutoScrolling");
		});
		$("#scrollingText").bind("mouseout", function () {
			$("#scrollingText").smoothDivScroll("startAutoScrolling");
		});
	});
</script>
<?php
	$ticker_set = mysqli_query($banjana,"SELECT * FROM `wp_posts` WHERE `post_status` = 'publish' AND `post_type` = 'post' ORDER BY `post_date` DESC");
	while ($ticker = mysqli_fetch_array($ticker_set)){
		$ticker_title = $ticker['post_title'];
		$ticker_url = $ticker['post_name'];
		$postdate = $ticker['post_date'];
		$postdate = explode(" ",$postdate);
		$postdate = $postdate[0];
		$postdate = str_ireplace("-","/",$postdate);
		$post_id = $ticker['ID'];
		$tickertape = $tickertape.'<p><a href="./events.php?id='.$post_id.'"><i class="fa fa-circle"></i> '.$ticker_title.'</a></p>';
	}
?>

<div class="ticker-container pad">
	<div class="col-sm-12 ticker" id="scrollingText">		
		<?php		
			echo $tickertape.$tickertape.$tickertape.$tickertape.$tickertape;
		?>
	</div>
</div>