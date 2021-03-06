<?php  
required "../connect_db.php";
?>

<?php 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>QuickBuy.lk</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">	
	<link rel="stylesheet" type="text/css" href="mainPage.css">
	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	} 
	</script>
	</head>
<body>
<!--CONTAINER-->
<div id="container">
	<!--HEADER AREA-->
	<div id="header">
		<div id="logo">
			<img src="./img/logo.jpg">
		</div>
		<div id="top_info">
			<form id="searchform" name="search_form" method="post" action="searchReults.php">
				<input type="text" id="stext1" placeholder="Welcome to QuickBuy.lk !">
				<input type="text" id="stext2" name="item_name" placeholder="Search Here" required>
				<input type="button" id="sbutton" name="submit" value="Search">
		</form>
		</div>
		<div id="navbar">
			<ol id="menu">
				<li><a href="./categoryPage.php">Categories</a></li>
				<li><a href="./contactPage.php">Help & Contact</a></li>
				<li><a href="./aboutPage.php">About Us</a></li>
				<li><a href="./myAccount.php">My Account</a></li>
			</ol>
		</div>
	</div>
	<!--CONTENET AREA-->
	<div id="content_area">
	 <div class="slideshow-container">
	  <div class="mySlides fade">
	    <div class="numbertext">1 / 3</div>
	    <img src="1.jpg" style="width:100%">
	    <div class="text">Caption Text</div>
	  </div>

	  <div class="mySlides fade">
	    <div class="numbertext">2 / 3</div>
	    <img src="2.jpg" style="width:100%">
	    <div class="text">Caption Two</div>
	  </div>

	  <div class="mySlides fade">
	    <div class="numbertext">3 / 3</div>
	    <img src="3.jpg" style="width:100%">
	    <div class="text">Caption Three</div>
	  </div>

	  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	  <a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span>
	  <span class="dot" onclick="currentSlide(2)"></span>
	  <span class="dot" onclick="currentSlide(3)"></span>
	</div> 
	
	</div>
		<div id="left_col">
			<h1>Categories</h1>
			<ul>
				<li><h3>Vehicle</h3></li>
	            <li><img src="">image1</li>	            
			</ul>

			<ul>
				<li><h3>Houses</h3></li>
	            <li><img src="">image2</li>            
			</ul>

			<ul>
				<li><h3>Mobile Phones</h3></li>
	            <li><img src="">image3</li>            
			</ul>
		</div>

		<div id="right_col">
			<h1>Hot Deals Today!</h1>
			<ul id="deals">
	            <li><img src="">image1</li>
	            <li>Name:</li>
	            <li>Price:</li>
			</ul>
			<ul id="deals">
	            <li><img src="">image2</li>
	            <li>Name:</li>
	            <li>Price:</li>
			</ul>
			<ul id="deals">
	            <li><img src="">image3</li>
	            <li>Name:</li>
	            <li>Price:</li>
			</ul>
		</div>
	</div>
	<div class="footer-copyright">
        Copyright Â© 2017 <b>Team V4 </b>
    </div>
	<!--FOOTER AREA-->
	<!--  <div id="footer">Footer</div> -->
</div>
<!--END CONTAINER-->
</body>
</html>