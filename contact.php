<?php
	//Contact
	//Login Script Here
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Contact page for Banjana Nursery School">
		<meta name="author" content="Tavy Fraser - Laserbird Media">
		<title>Banjana Nursery School</title>

		<!-- Bootstrap -->
		<?php include_once('./includes/dependencies.php');?>
		<?php $identifier = 'contact';?>
		<?php
			$sent = filter_input(INPUT_GET, 'sent', FILTER_SANITIZE_SPECIAL_CHARS);
		?>	
	</head>
	<body>
		<?php
			if ($sent == 1){ //if Header states email was sent, inform user
				echo "<script>";
				echo "$(document).ready(function(){";
				echo "$('#emailSuccess').modal('show');";
				echo "})";
				echo "</script>";
			} elseif ($sent == 2){ //if Header states error has occurred, inform user
				echo "<script>";
				echo "$(document).ready(function(){";
				echo "$('#emailFail').modal('show');";
				echo "})";
				echo "</script>";
			}
		?>
		<div class="container-fluid">
			<!-- Header -->
			<?php include_once('./includes/header.php');?>
			<!-- Email Success modal -->
			<div class="modal fade" style="padding-top:25%;" id="emailSuccess" tabindex="-1" role="dialog" aria-labelledby="emailSuccessLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">							
						<div class="modal-body">
							<center>
								Thank you for contacting us!<br><br>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</center>									
						</div>
					</div>
				</div>
			</div>
			<!-- Email Fail modal -->
			<div class="modal fade" style="padding-top:25%;" id="emailFail" tabindex="-1" role="dialog" aria-labelledby="emailFailLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">							
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<center>
								Something went horribly wrong and your email wasn't sent...<br>
								Please try again, or email directly to admin@banjananurseryschool.com<br><br>
								Sorry for the inconvenience.
							</center>
						</div>
					</div>
				</div>
			</div>
			<!-- Content -->
			<div class="row pad" style="margin-top:30px;">
				<div class="col-sm-12 icon-zone" style="margin-bottom:30px;">
					<div class="round-icon">
						<i class="fa fa-envelope-o fa-5x"></i>						
					</div>
					<span>Contact Us</span>					
				</div>
				<div style="text-align:center;font-weight:bold;width:60%;margin:0 auto;">
					Maybe you have more questions about how your money benefits our pupils or maybe you 
					want to know more about our projects, we’d love to hear it. Get in touch with us here...<br><br>
				</div>
			</div>
			<form role="form" name="content" enctype="multipart/form-data" action="./includes/processemail.php" method="post">
				<div class="row pad">
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="name" class="form-control" id="topform" placeholder="Name">
							<input type="email" class="form-control" id="midform" name="email" placeholder="Email">
						</div>
					</div>
				</div>
				<div class="row pad">
					<div class="form-group">
						<div class="col-sm-12">
							<textarea class="form-control" rows="5" id="bottomform" name="message">Message</textarea>
						</div>
					</div>
				</div>
				<div class="row pad">
					<div class="form-group">
						<div class="col-sm-12">
							<input type="submit" value="Submit">
							<input type="reset" value="Reset">
						</div>
					</div>
				</div>
			</form>
			<hr>
			<!-- End Content -->
			<!-- Footer -->
			<?php include_once('./includes/footer.php');?>
			<!-- End Footer -->
		</div>
	</body>
</html>