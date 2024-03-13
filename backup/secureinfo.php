<?php
session_start();
if(!isset($_SESSION['login_user'])) {
    header("location: login.php");
}

// Connect to MySQL database
$host = "db5012368746.hosting-data.io";
$db_name = "dbs10402157";
$username = "dbu826496";
$password_db = "sh@kshi2024";
$conn = mysqli_connect($host, $username, $password_db, $db_name);

// Query the database to get the list of users
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>
<html>
<head>
<title>Secure Page</title>
</head>
<body>
<h1>Current Users</h1>
<table>
<tr>
<th>User ID</th>
<th>Password</th>
</tr>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['user_id']; ?></td>
<td><?php echo $row['password']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
