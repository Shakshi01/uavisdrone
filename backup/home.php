<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login_user'])) {
    header("location: login.php");
}
?>


<html>
<head>
	<title>UavIsDrone | Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		/* Header */
		.header {
			background-color: #C2E5FB;
			color: white;
			padding: 20px;
		}
		.header h1 {
			font-size: 40px;
			margin: 0;
		}
		/* Navigation */
		.navbar {
			overflow: hidden;
			background-color: #333;
			font-family: Arial;
		}
		.navbar a {
			float: left;
			display: block;
			color: white;
			text-align: center;
			padding: 14px 20px;
			text-decoration: none;
		}
		.navbar a:hover {
			background-color: #ddd;
			color: black;
		}

		.my-div {
          max-width: 100px;
          max-height: 430px;
          overflow: hidden;
      }
		/* Home */
		.home {
			background-color: #e6f7ff;
			padding: 50px;
			text-align: center;
		}
		.home h2 {
			font-size: 40px;
			color: #0052cc;
			margin: 0;
		}
		/* About */
		.about {
			background-color: #f2f2f2;
			padding: 50px;
			text-align: center;
		}
		.about h2 {
			font-size: 40px;
			color: #0052cc;
			margin: 0;
		}
		/* Products/Services */
		.products-services {
			background-color: #e6f7ff;
			padding: 50px;
			text-align: center;
		}
		.products-services h2 {
			font-size: 40px;
			color: #0052cc;
			margin: 0;
		}
		/* News */
		.news {
			background-color: #f2f2f2;
			padding: 50px;
			text-align: center;
		}
		.news h2 {
			font-size: 40px;
			color: #0052cc;
			margin: 0;
		}
		/* Contacts */
		.contacts {
			background-color: #e6f7ff;
			padding: 50px;
			text-align: center;
		}
		.contacts h2 {
			font-size: 40px;
			color: #0052cc;
			margin: 0;
		}
	</style>
</head>
<body>
	<!-- Header -->
	<div class="header">
		<h1>Eye In The Sky - UavIsDrone</h1>
		<p>Experience the world from above</p>
	</div>

	<!-- Navigation -->
	<div class="navbar">
		<a href="https://uavisdrone.com/pages/home.php">Home</a>
		<a href="https://uavisdrone.com/pages/home1.php">About</a>
		<a href="https://uavisdrone.com/pages/services.php">Services</a>
		<a href="https://uavisdrone.com/pages/news.php">News</a>
		<a href="https://uavisdrone.com/pages/contacts.php">Contacts</a>
	</div>

	<!-- Home -->
<div class="slideshow-container">
  <img class="mySlides" src="image1.jpg">
  <img class="mySlides" src="image2.jpg">
  
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</body>
</html>