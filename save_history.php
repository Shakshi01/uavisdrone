<?php
include_once('connect.php');
// Check if the function should be called
if (isset($_POST['action']) && $_POST['action'] === 'callFunction') {
    $url = $_POST['url'];
    $currentDateTime = date('Y-m-d H:i:s');
  	echo $url;
  
    // Insert the item into the database
    $sql = "INSERT INTO `history` (`url`, `time`) VALUES ('$url', '$currentDateTime')";
    if (mysqli_query($conn, $sql)) {
        echo "URL added to History successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>