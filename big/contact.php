<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kayla Gmyr | Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/6a71565c22.js"></script>
	<link rel="stylesheet" href="styles/nav.css">
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/form.css">
</head>

<body>
	<!-- START WRAPPER -->
	<main class="wrapper">
		<header>
			<h1 id="header"><a href="index.html">Kayla Gmyr</a></h1>
			<nav>
				<ul class="topnav" id="myTopnav">

					<li><a href="index.html" >Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
				</ul>
			</nav>
		</header>

	<div class="container">
			

		<section>

			<h2>Contact me!</h2>
			
			<?php
			/*
			  * Below are 2 different forms to be re-used       
			  * 
			  * Only use one at a time, comment out the other!       
			  *
			  */
		
			include 'includes/contact_include.php'; #site keys & code here
		
			$toAddress = "juliorayramos@gmail.com";  //place your/your client's email address here
			$toName = "Julio Ramos"; //place your client's name here
			$website = "julioramos.dev";  //place NAME of your client's website
		
			echo loadContact('simple.php');#demonstrates a simple contact form
			//echo loadContact('multiple.php');#demonstrates multiple form elements
		  ?>

		</section>
		<aside class="aside-photo">
			<img src="images/pfp1.jpg" class="desktop" alt="Desktop">
		</aside>	


	</div>
	
		<footer>
			<ul>
				<li>
					&copy; 2021 by <a href="contact.php">Julio Ramos</a>, All Rights Reserved ~
				</li>
				<li>
					<a id="html-checker" href="#">Check HTML</a> ~
				</li>
				<li>
					<a id="css-checker" href="#">Check CSS</a>
				</li>
					<a href="disclaimer.html">Disclaimer</a>
				</li>
			</ul>
		</footer>
				<!-- END Footer -->
	</main>
			<!-- END WRAPPER -->
		
			
			<script>
				//https://tinyurl.com/dynamic-html-checker
				document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
				document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
				
				function myFunction() {
					var x = document.getElementById("myTopnav");
					if (x.className === "topnav") {
						x.className += " responsive";
					} else {
						x.className = "topnav";
					}
				}
			</script>
</body>
</html>