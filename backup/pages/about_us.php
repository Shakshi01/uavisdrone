<!DOCTYPE html>

<?php
session_start();
if(!isset($_SESSION['login_user'])) {
    header("location: login.php");
}
?>

<html>
<head>
	<title>EyeInTheSky - About Us</title>
	<style>
		body {
			background-color: #F5F5F5;
		}
		
		.header {
			background-color: #1E90FF;
			color: #FFF;
			padding: 20px;
			text-align: center;
			font-size: 30px;
		}
		
		.navbar {
			background-color: #333;
			overflow: hidden;
		}
		
		.navbar a {
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}
		
		.navbar a:hover {
			background-color: #ddd;
			color: black;
		}
		
		.about {
			background-color: #FFF;
			color: #000;
			padding: 20px;
			text-align: center;
			font-size: 20px;
		}
		
		.about p {
			text-align: justify;
			margin: 0 auto;
			max-width: 600px;
		}
		
		.footer {
			background-color: #333;
			color: #FFF;
			padding: 10px;
			text-align: center;
		}
		
	</style>
</head>
<body>
	<div class="header">
		<h1>EyeInTheSky</h1>
		<p>Your one-stop shop for drone-based surveillance and services</p>
	</div>
	
	<!-- Navigation -->
	<div class="navbar">
		<a href="https://uavisdrone.com/pages/home.php">Home</a>
		<a href="https://uavisdrone.com/pages/about_us.php">About</a>
		<a href="https://uavisdrone.com/pages/services.php">Services</a>
		<a href="https://uavisdrone.com/pages/news.php">News</a>
		<a href="https://uavisdrone.com/pages/contacts.php">Contacts</a>
	</div>
	
	<div class="about">
		<h2>About Us</h2>
		<p>EyeInTheSky is a leading provider of cloud-based surveillance services, specializing in the use of cutting-edge drone technology. Our high-resolution cameras and real-time monitoring capabilities enhance security and surveillance operations for businesses and organizations. Our services are ideal for large commercial properties, industrial sites, and public events.</p>
		<p>At EyeInTheSky, we pride ourselves on providing reliable, professional, and cost-effective solutions to our clients. Our team of experienced pilots and technicians are fully licensed and insured, and our equipment is state-of-the-art and regularly maintained to ensure maximum performance.</p>
		<p>Our services include aerial photography and videography, surveying and mapping, inspections, and more. Contact us today to learn how we can help enhance your security and surveillance operations.</p>
	</div>
	
	<div class="footer">
		<p>Copyright &copy; 2023 EyeInTheSky</p>
	</div>
	
</body>
</html>
