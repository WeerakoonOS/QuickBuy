<?php 
 include ("connect_db.php");
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">

</head>
<body>
<div id="container">
	<div id="header">
		<div id="signin">
			<button class="button" id="signinbtn">Already a member?</button>
			<button class="button">Sign Up</button>
		</div>
		<div id="logo">
			<img src="./img/logo.jpg">
		</div>
		<div>
			<p id="stext1"> Welcome to QuickBuy.lk !</p>
		</div>
		<div id="top_info">
			  <form id="searchform" action="searchResults.php" method="post">
        
        <input type="text" name="searchText" id="stext2" placeholder="Search Here" required>
        <input type="submit" id="sbutton" name="search" value="Search">
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

<div id="content">
  <div id="frame_head"></div>

    <form method="post" action="myAccount.php">
    
      
</div>

</body>
</html>