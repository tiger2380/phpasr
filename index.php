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
		<h1 id="logo"><a href="index.php">PHPASR</a></h1>
		<ul id="navigation">
			<li class="active"><a href="snippet.php">Repo</a>
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
			<div id="username" class="group">Welcome, <a href="#">admin</a></div>
			<div id="controls" class="group">
				<div id="settings"><a href="#">Settings</a></div>
				<div id="logout"><a href="#">Logout</a></div>
			</div>
		</div>
	</div>
</div>

<div id="body" class="group width">
	<div id="splash">
	
	</div>
	<div id="col-wrap">
		<div class="col left hp">
			<div class="col-head">
				Contribute
			</div>
			<div class="col-body">
				Conent
			</div>
		</div>
		<div class="col center hp">
			<div class="col-head">
				Review
			</div>
			<div class="col-body">
				Conent
			</div>
		</div>
		<div class="col right hp">
			<div class="col-head">
				Edit
			</div>
			<div class="col-body">
				Conent
			</div>
		</div>
	</div>
</div>

<div id="footer" class="group width">
A phpacademy.org community project.
</div>
</body>
</html>