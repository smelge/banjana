<div class="row head-bar">
	<div class="col-sm-5">
		<!-- Logo -->
		<a href="./index.php">
			<img src="./assets/banjana-logo2.gif" alt="Banjana Nursery School Logo" class="img-responsive"/>
		</a>
	</div>
	<div class="col-sm-7 main-menu">
		<ul>
			<li<?php if($identifier == 'index'){echo ' style="background:#cccc66;"';}?>><a href="./index.php">Home</a>
				<ul>
					<li<?php if($identifier == 'about'){echo ' style="background:#cccc66;"';}?>><a href="./about.php">About Us</a></li>
				</ul>
			</li>
			<li<?php if($identifier == 'giving'){echo ' style="background:#cccc66;"';}?>><a href="./giving.php">Giving</a>
				<ul>
					<li<?php if($identifier == 'support'){echo ' style="background:#cccc66;"';}?>><a href="./support.php">Support</a></li>
				</ul>
			</li>
			<li<?php if($identifier == 'projects'){echo ' style="background:#cccc66;"';}?>><a href="./projects.php">Projects</a>
				<ul>
					<li<?php if($identifier == 'events'){echo ' style="background:#cccc66;"';}?>><a href="./events.php">Current Events</a></li>					
				</ul>
			</li>
			<li<?php if($identifier == 'contact'){echo ' style="background:#cccc66;"';}?>><a href="./contact.php">Contact</a></li>
		</ul>
	</div>
</div>