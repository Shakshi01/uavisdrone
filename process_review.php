<?php

include_once('connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $text = mysqli_real_escape_string($conn, $_POST['review_text']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $sql = "INSERT INTO `reviews` (`review_text`, `rating`, `title`, `name`) VALUES ('$text', '$rating', '$title', '$name')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added to review successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
