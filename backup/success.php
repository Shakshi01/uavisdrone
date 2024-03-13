<!DOCTYPE html>
<html>
<head>
	<title>Names Table</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Names Table</h1>
	<table>
		<tr>
			<th>Name</th>
		</tr>

		<?php
		// Open the text file for reading
		$file = fopen("../text/names.txt", "r");
		//$file = fopen($filename, "r");

		// Loop through each line of the file
		while (!feof($file)) {
			$name = fgets($file);
			if (!empty($name)) {
				echo "<tr><td>" . htmlspecialchars($name) . "</td></tr>";
			}
		}

		// Close the file
		fclose($file);
		?>
	</table>
</body>
</html>
