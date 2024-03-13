<!DOCTYPE html>
<html>
<head>
	<title>Name List</title>
	<style>
		table {
			border-collapse: collapse;
			width: 50%;
			margin: 0 auto;
		}

		th, td {
			padding: 8px;
			text-align: center;
			border: 1px solid #ddd;
			font-family: Arial, sans-serif;
		}

		th {
			background-color: #333;
			color: #fff;
		}
	</style>
</head>
<body>
	<h1>Name List</h1>
	<table>
		<tr>
			<th>Name</th>
		</tr>

		<?php
			// Open the text file
			$file = fopen("/text/names.txt", "r");

			// Loop through the lines in the file
			while (!feof($file)) {
				$name = trim(fgets($file));
				if (!empty($name)) {
					echo "<tr><td>$name</td></tr>";
				}
			}

			// Close the file
			fclose($file);
		?>
	</table>
</body>
</html>
