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
		<div id="snippet-header">Syntax Highlighter <div id="snippet-option"><a href="#" class="button row left">RAW</a><a href="#" class="button row right">Edit</a></div></div>
		<div class="code">
<?php
$inputCode = 'class myClass {
	public $var;
	public $var[\'hello\'];
	public $var = "Hello World";
	public $var = \'Hello World\';
	
	function __construct($theme = \'default\') {
		$this->theme = $theme;
		$this->theme=$theme;
		$this->theme    = $theme;
	}
	
	@
	*
	%
	&
	|
	/
	
	// Comment
	# Comment
	/* Comment */
	public function myFunc ( ) {
		return $var;
	}
	
	/* Comment */
	/* Comment */
	/* Comment */
	
	/************* Comment */
	
	/* 
		Comment 
	*/
	public function myFunc(__FILE__) {
		return $var;
	}
}';

include('assets/includes/code.class.php');
$code = new code;
echo $code->highlighter($inputCode);
?>
		</div>
		<div id="snippet-info" class="group">
			<div id="snippet-info-avatar"><img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" /></div>
			<div id="snippet-info-username">
				Admin
				<br />
				<a href="#">View Profile</a>
			</div>
			<div id="snippet-meta">
				<div id="snippet-meta-version">Version 1.24.51 last updated</div>
				<div id="snippet-meta-date">June 17th, 2012</div>
				<div id="snippet-meta-views">50 Views</div>
			 </div>
			 <div class="clearer"> </div>
			 <div id="snippet-tags"><b>Tags: </b> PHP Syntax Highlighter</div>
		</div>
	</div>
	
	<div id="comments">
		<div id="comments-header">Comments <div id="comments-meta">10 Comments</div></div>
		<div id="comments-list" class="group">
			<div class="comment">
				<div class="comment-user">
					<img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" />
				</div>
				<div class="comment-message">
					<div class="comment-user-says">Admin says:</div>
					Blah blah blah, this is a comment.
				</div>
			</div>
			
			<div class="comment">
				<div class="comment-user">
					<img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" />
				</div>
				<div class="comment-message">
					<div class="comment-user-says">Admin says:</div>
					Blah blah blah, this is a comment.
				</div>
			</div>
			
			<div class="comment">
				<div class="comment-user">
					<img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" />
				</div>
				<div class="comment-message">
					<div class="comment-user-says">Admin says:</div>
					Blah blah blah, this is a comment.
				</div>
			</div>
			
			<div class="comment">
				<div class="comment-user">
					<img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" />
				</div>
				<div class="comment-message">
					<div class="comment-user-says">Admin says:</div>
					Blah blah blah, this is a comment.
				</div>
			</div>
			
			<div class="comment">
				<div class="comment-user">
					<img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" />
				</div>
				<div class="comment-message">
					<div class="comment-user-says">Admin says:</div>
					Blah blah blah, this is a comment.
				</div>
			</div>
			
			<div class="comment">
				<div class="comment-user">
					<img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" />
				</div>
				<div class="comment-message">
					<div class="comment-user-says">Admin says:</div>
					Blah blah blah, this is a comment.
				</div>
			</div>
			
			<div class="comment">
				<div class="comment-user">
					<img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" />
				</div>
				<div class="comment-message">
					<div class="comment-user-says">Admin says:</div>
					Blah blah blah, this is a comment.
				</div>
			</div>
			
			<div class="comment">
				<div class="comment-user">
					<img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" />
				</div>
				<div class="comment-message">
					<div class="comment-user-says">Admin says:</div>
					Blah blah blah, this is a comment.
				</div>
			</div>
			
			<div class="comment">
				<div class="comment-user">
					<img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" />
				</div>
				<div class="comment-message">
					<div class="comment-user-says">Admin says:</div>
					Blah blah blah, this is a comment.
				</div>
			</div>
			
			<div class="comment">
				<div class="comment-user">
					<img alt="Admin" src="http://www.gravatar.com/avatar/?s=50" />
				</div>
				<div class="comment-message">
					<div class="comment-user-says">Admin says:</div>
					Blah blah blah, this is a comment.
				</div>
			</div>
		
		</div>
		
		<div class="button group load-more">Load More Comments</div>
		
	</div>
</div>

<div id="footer" class="group width">
A phpacademy.org community project.
</div>
</body>
</html>