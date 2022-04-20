<?php

if(isset($_POST["button"])) {
	$login=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];

	$connection=mysqli_connect('localhost', 'root', '', 'my_database');
	if($connection){
		print_r('YEEH');
	}
	$query="INSERT INTO users (user_name, password, email) VALUES ('$login', '$password', '$email');";
	$query_result=mysqli_query($connection, $query);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway&display=swap" rel="stylesheet">
	<title>AXIT</title>
</head>
<body>
	<div class="wrapper">
		<header class="header">
			<div class="header_container">
				<a href="#" class="logo"><img src="img/logo.png"></a>
				<nav class="menu">
					<ul class="menu_list">
						<li class="menu_item"><a href="#" class="menu_link">Features</a></li>
						<li class="menu_item"><a href="#" class="menu_link">About</a></li>
						<li class="menu_item"><a href="#" class="menu_link">Pricing</a></li>
						<li class="menu_item"><a href="#" class="menu_link">Reviews</a></li>
						<li class="menu_item"><a href="#" class="menu_link">Contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<main class="main">
			<div class="main_container">
				<img src="img/axit.png" class="axit">
				<h1 class="h1">MODERN AXURE TEMPLATE<br>FOR BEAUTIFUL PROTOTYPES</h1>
				<img src="img/line.png" class="line">
				<p class="p_main">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aenean<br>euismod bibendum laoreet. Proin gravida dolor sit amet lacus<br>accumsan et viverra justo commodo.</p>
				<a href="#" class="download">Download</a>
				<form class="form" method="post" action="index.php">
					<p class="form_header"> Try Your FREE Trial Today</p>
					<div class="card">
						<p><input type="text" name="name" value="Name" class="block"></p>
						<p><input type="email" name="email" value="Email" class="block"></p>
						<p><input type="text" name="password" value="Password" class="block"></p>
					</div>
					<button class="button"><input type="submit" name="button" value="Get Started" class="but"></button>
				</form>
			</div>
			<div class="awesome">
				<div class="head">
					<h2 class="h2">WHY THIS IS AWESOME</h2>
					<img src="img/head_line.png">
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
				</div>
					<div class="icon">
						<div class="design">
							<img src="img/design.png">
							<p class="p_head">Thoughtful Design</p>
							<p class="p">Lorem ipsum dolor, sit amet consectetur adipisicing<br> elit. Aenean euismod bibendum laoreet. Proin gravida<br> dolor sit amet lacus accumsan et viverra</p>
						</div>
						<div class="crafted">
							<img src="img/crafted.png">
							<p class="p_head">Well Crafted</p>
							<p class="p">Lorem ipsum dolor, sit amet consectetur adipisicing<br> elit. Aenean euismod bibendum laoreet. Proin gravida<br> dolor sit amet lacus accumsan et viverra</p>
						</div>
						<div class="customize">
							<img src="img/customize.png">
							<p class="p_head">Easy to Customize</p>
							<p class="p">Lorem ipsum dolor, sit amet consectetur adipisicing<br> elit. Aenean euismod bibendum laoreet. Proin gravida<br> dolor sit amet lacus accumsan et viverra</p>
						</div>
					</div>
			</div>
			<div class="cover">
				<img src="img/bg.png" class="bg">
			</div>
		</main>
		<!-- <footer class="footer">
			footer
		</footer> -->
	</div>	
</body>
</html>