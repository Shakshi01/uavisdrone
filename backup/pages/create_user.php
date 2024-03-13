<?php
// Add your database connection details here
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $home_address = $_POST["home_address"];
    $home_phone = $_POST["home_phone"];
    $cell_phone = $_POST["cell_phone"];

    $sql = "INSERT INTO users (first_name, last_name, email, home_address, home_phone, cell_phone) VALUES ('$first_name', '$last_name', '$email', '$home_address', '$home_phone', '$cell_phone')";
    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="users.html">Users</a></li
