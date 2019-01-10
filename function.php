<?php
	function menu_display(){
		try{
			$con=new PDO('mysql:host=localhost;dbname=school','root','');
			$run=$con->prepare("SELECT * from page");
			$run->setFetchMode(PDO::FETCH_OBJ);
			$run->execute();
			while($row=$run->fetch()){
				echo("<li><a href='page.php?page_id=$row->id'>".$row->title."</a></li>");
			}
		}
		catch(PDOException $e){
			echo('Error: ' .$e->getMessage());
		}
	}
	#page contents
	function page_content($id){
		try{
			$con=new PDO('mysql:host=localhost;dbname=school','root','');
			$run=$con->prepare("SELECT * from page_contents where page_id='$id'");
			$run->setFetchMode(PDO::FETCH_OBJ);
			$run->execute();
			while($row=$run->fetch()){
				echo("<h3>".$row->title."</h3>");
				echo('<p>'.$row->contents."</p>");
			}
		}
		catch(PDOException $e){
			echo('Error: ' .$e->getMessage());
		}
	}
	//Image Slider
	function image_slider(){
		try{
			//global $con;
			$con=new PDO('mysql:host=localhost;dbname=school','root','');
			$run=$con->prepare("SELECT * from imge_slider");
			$run->setFetchMode(PDO::FETCH_OBJ);
			$run->execute();
			while ($row=$run->fetch()) {
				echo "<div class='items'><img width='100%' src='data:image;base64,".base64_encode($row->image)."'>
					<div class='info'>
						<h2>".$row->heading."</h2>
						<p>".$row->about."</p>
					</div>
				</div>";
			}
		}
		catch(PDOException $e){
			echo "Error:" .$e->getMessage();
		}
	}
	#image slider end

	#display news from database
	function news_display(){
		try {
			$con=new PDO('mysql:host=localhost;dbname=school','root','');
			$run=$con->prepare("SELECT * from news");
			$run->setFetchMode(PDO::FETCH_OBJ);
			$run->execute();
			while($row=$run->fetch()){
				echo "<li>".$row->news_title. "<img src='img/logo/new-icon.gif'></li>";
			}
		} catch (Exception $e) {
			echo "News Error is :".$e->getMessage();
		}
	}

	#gallery page function
	function img_group(){
		try {
			$con=new PDO('mysql:host=localhost;dbname=school','root','');
			$run=$con->prepare("SELECT * from img_gellery");
			$run->setFetchMode(PDO::FETCH_OBJ);
			$run->execute();
			while($row=$run->fetch()){
				echo "<li><a href='gallery.php?group_id=$row->img_gr_id'>".$row->img_gr_title."</a></li>";
			}
		} catch (Exception $e) {
			echo "img type Error is :".$e->getMessage();
		}
	}

	#displaying image
	function img_disply($img_type){
		try {
			$con=new PDO('mysql:host=localhost;dbname=school','root','');
			$run=$con->prepare("SELECT * from img_gellery_img where img_gr_id='$img_type'");
			$run->setFetchMode(PDO::FETCH_OBJ);
			$run->execute();
			while($row=$run->fetch()){
				echo "<img src='data:image;base64,".base64_encode($row->img)."'>";
			}
		} catch (Exception $e) {
			echo "News Error is :".$e->getMessage();
		}
	}
?>