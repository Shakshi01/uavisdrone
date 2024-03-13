<!DOCTYPE html>
<html>
<head>
	<title>EyeInTheSky - Contact Us</title>
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
		<p>Experience the world from above</p>
	</div>
  
  	<!-- Navigation -->
	<div class="navbar">
		<a href="https://uavisdrone.com/pages/home.php">Home</a>
		<a href="https://uavisdrone.com/pages/about_us.php">About</a>
		<a href="https://uavisdrone.com/pages/services.php">Services</a>
		<a href="https://uavisdrone.com/pages/news.php">News</a>
		<a href="https://uavisdrone.com/pages/contacts.php">Contacts</a>
	</div>
  
<!-- Contacts -->
<div class="contacts">
	<h2>Contact Us</h2>
	<p>Get in touch with us for more information or to request a quote:</p>
  <?php
  $filename = "https://uavisdrone.com/text/contacts.txt";
  $handle = fopen($filename, "r");
  if ($handle !== FALSE) {	
          echo "<ul>";
          while (($line = fgets($handle)) !== FALSE) {
            echo "<li>" . htmlspecialchars($line) . "</li>";
          }
          echo "</ul>";
          fclose($handle);
        }
  ?>
</div>
</body>
</html>