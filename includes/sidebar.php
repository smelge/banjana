<?php
	$sidebar_set = mysqli_query($banjana,"SELECT DISTINCT DAY(post_date), MONTH(post_date), YEAR(post_date) FROM `wp_posts` WHERE `post_type` = 'post' AND `post_status` = 'publish' ORDER BY `post_date` DESC");
	while($sidebar = mysqli_fetch_array($sidebar_set)){
		$item_date = $sidebar[0].'-'.$sidebar[1].'-'.$sidebar[2];
		$item_date = date_create($item_date);
		$item_date = date_format($item_date,"F Y");
		if ($current_date != $item_date){
			echo '<a href="./events.php?month='.$sidebar[1].'&year='.$sidebar[2].'">'.$item_date.'</a>';
			echo '<br>';
		}
		$current_date = $item_date;
	}
?>