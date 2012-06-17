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
			<div id="username" class="group">Welcome, <a href="#">admin</a></div>
			<div id="controls" class="group">
				<div id="settings"><a href="#">Settings</a></div>
				<div id="logout"><a href="#">Logout</a></div>
			</div>
		</div>
	</div>
</div>

<div id="body" class="group width">
	<div id="breadcrum">Repo > PHP > Syntax Highlighter</div>
	<div id="snippet">
		<div id="snippet-header">Syntax Highlighter</div>
		<div id="code">
class myClass {
	public $var = 'Hello World';
	
	public function myFunc() {
	
	}
}
		</div>
	</div>
</div>

<div id="footer" class="group width">
A phpacademy.org community project.
</div>
</body>
</html>