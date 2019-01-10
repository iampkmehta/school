<?php 
	require_once('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paramount</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		<?php include 'css/style.css'; ?>
	</style>
</head>
<body>
	<div class="container">
		<!--Header start-->
		<div class="row">
			<div class="col-lg-12">
				<?php 
					include 'header.php';
				?>
			</div>
		</div>
		<!--Header end-->

		<!--page container-->
		<div class="row">
			<div class="col-lg-8">
				<div class="content"><!--Content area-->
					<?php
						$page_id=$_GET['page_id'];
						page_content($page_id);
					?>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="social-link">
					<h3>Social Profiles</h3>
					<div class="border"></div><!--Border-->
					<a href="#"><img src="img/social button/fb_icon.png" height="37" width="" alt=""></a>
					<a href="#"><img src="img/social button/g++.png" height="40" width="40" alt=""></a>
					<a href="#"><img src="img/social button/linkedin.png" height="37" width="" alt=""></a>
					<a href="#"><img height="29" width="" src="img/social button/pintresr.png" alt=""></a>
					<a href="#"><img src="img/social button/twitter.png" height="33" width="" alt=""></a>
				</div>
				<!--News-->
				<div class="news">
					<h3>News</h3>
					<div class="border"></div><!--Border-->
					<?php news_display(); ?>
				</div>
				<div id="calender">
						
				</div>
			</div>
		</div>
		<!--Footer-->
		<div class="row">
			<div class="col-lg-12">
				<?php
					include('footer.php');
				?>
			</div>
		</div>
		<!--Footer end-->
	</div>
</body>
</html>