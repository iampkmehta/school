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
	<script src="js/function.js"></script>
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
			<div class="col-lg-3">
				<h4 id="img_title">Images Gellery</h4>
				<div id="img-type">
					<?php img_group();?>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="img_gellary"><!--Content area-->
					<img src="img/1.jpg" alt="">
					<img src="img/2.jpg" alt="">
					<img src="img/3.jpg" alt="">
					<img src="img/4.jpg" alt="">
					<img src="img/5.jpg" alt="">
					<img src="img/2.jpg" alt="">
					<img src="img/1.jpg" alt="">
					<?php 
						$id=$_GET['group_id'];
						img_disply($id);
					?>
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