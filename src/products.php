<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css?php echo time()" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
	<div id="header">
		<h1 id="logo">Logo</h1>
		<nav>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div id="main">
	<div id='products'>
		<?php
		 include_once 'display.php';
		?>
	</div>
	</div>
	<div>
		<table id="cart">
			<thead>
				<th>Image</th>
				<th>Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Action</th>
			</thead>
			<tbody id="tbody"></tbody>
		</table>
	</div>
	<div id="footer">
		<nav>
			<ul id="footer-links">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Declaimers</a></li>
			</ul>
		</nav>
	</div>
</body>
<script src="./JS/script1.js"></script>
</html>