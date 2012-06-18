<?php
/* Include Global Files */
include("assets/includes/core.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>phpacademy Snippet Repository</title>
	<!--Meta Tags Descriptions, KeyWords, Author-->
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<!--CSS Files-->
	<link rel="stylesheet" type="text/css" href="assets/templates/default/css/style.css" />
	<!--jQuery-->
	<script type="text/javascript" src="assets/js/jquery-1.7.1.min.js"></script>
</head>
<body>

<div id="header" class="group">
	<div class="group width">
		<h1 id="logo">PHPASR</h1>
		<ul id="navigation">
			<li class="active"><a href="#">Repo</a>
				<ul>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Newest S+</a></li>
					<li><a href="#">Most popular</a></li>
					<li><a href="#">Favorite S+</a></li>
				</ul>
			</li>
			<li><a href="#">Add S+</a></li>
		</ul>
		<div id="search">
			Search...
			<div id="search-button"></div>
		</div>
		<div id="user">
			<div id="username" class="group">Not Logged In<a href="#"></a></div>
			<div id="controls" class="group">
				<div id="settings"><a href="#">Login</a></div>
				<div id="logout"><a href="#">Register</a></div>
			</div>
		</div>
	</div>
</div>

<div id="body" class="group width">
	<div id="breadcrum">Please fill out all fields</div>
	<div id="snippet">
		<div id="snippet-header">Register <div id="snippet-meta"></div></div>
		<div class="fields">
		
		<form action="register.php" method="POST">
		Username:<br><input type="text" name="username" maxlength="40"><br><br><br>
		Password:<br><input type="password" name="password" maxlength="40"><br><br><br>
		Confirm Password:<br><input type="password" name="confpassword" maxlength="40"><br><br><br>
		E-mail:<br><input type="text" name="email" maxlength="100"><br><br><br>
		<input type="submit" value="Sign up!">
		
		<?php
		if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confpassword']) && isset($_POST['email'])) {
		
		}
		?>
		</form>
		</div>
	</div>
	

		</div>
		
		</div>
	</div>
</div>

<div id="footer" class="group width">
A phpacademy.org community project.
</div>
</body>
</html>