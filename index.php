<!DOCTYPE html>
<html>
<head>
 
	<title></title>
 
</head>
<body>
 
	<style type="text/css">
	html,body{
		padding: 0;
		margin:0;
		font-family: sans-serif;
	}
 
	.menu-malasngoding{
		background-color: #3141ff;
	}
 
	.menu-malasngoding ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
 
	.menu-malasngoding > ul > li {
		float: left;
	}
 
	
	.menu-malasngoding li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
 
	.menu-malasngoding li a:hover{
		background-color: #2525ff;
	}
 
	li.dropdown {
		display: inline-block;
	}
 
	.dropdown:hover .isi-dropdown {
		display: block;
	}
 
	.isi-dropdown a:hover {
		color: #fff !important;
	}
 
	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: #f9f9f9;
	}
 
	.isi-dropdown a {
		color: #3c3c3c !important;
	}
 
	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
</style>
 
 
<header class="header">
	<div class="menu-malasngoding">
 
		<ul>
			<li><a href="#">Home</a></li>
			<li class="dropdown"><a href="#">Create</a>
				<ul class="isi-dropdown">
					<li><a href="create/createsederhana1.php">Sub Menu 1</a></li>
					<li><a href="create/createsederhana2.php">Sub Menu 2</a></li>
					<li><a href="create/uploadgambar.php">Sub Menu 3</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Read</a>
				<ul class="isi-dropdown">
					<li><a href="Read/form_readsederhana1.php">Sub Menu 1</a></li>
					<li><a href="#">Sub Menu 2</a></li>
					<li><a href="#">Sub Menu 3</a></li>
					<li><a href="#">Sub Menu 4</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Formatif</a>
				<ul class="isi-dropdown">
					<li><a href="berita/berita.php">BERITA</a></li>
				</ul>
			</li>
		</ul>
 
	</div>
</header>
 
<br/>
 
<center>
	<h1></h1>
</center>
 
</body>
</html>