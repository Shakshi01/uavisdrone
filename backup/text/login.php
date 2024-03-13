<?php
// Define the static login credentials
$valid_username = "admin";
$valid_password = "admin";

// Start the session
session_start();

// Check if the user has submitted the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Get the username and password from the form
	$username = $_POST["username"];
	$password = $_POST["password"];

	// Check if the username and password are correct
	if ($username == $valid_username && $password == $valid_password) {

		// Set the session variable to indicate that the user is logged in
		$_SESSION["loggedin"] = true;

		// Redirect the user to the homepage
		header("Location: /pages/success.php");
		exit;
	}
	else {
		// Display an error message if the username or password is incorrect
		$error_message = "Invalid username or password";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		form {
			background-color: #fff;
			border: 1px solid #ddd;
			padding: 20px;
			margin: 0 auto;
			max-width: 400px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}
		label, input {
			display: block;
			margin-bottom: 10px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		.error {
			color: red;
			font-size: 0.8em;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" required>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required>

		<input type="submit" value="Login">

		<?php if (isset($error_message)): ?>
			<div class="error"><?php echo $error_message; ?></div>
		<?php endif; ?>
	</form>
</body>
</html>
