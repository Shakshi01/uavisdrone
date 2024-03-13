<?php
include_once('connect.php');

//$sql = "SELECT review_text, rating, title, name FROM `reviews` ORDER BY rating DESC LIMIT 10";
$sql = "SELECT review_text, rating, title, name FROM `reviews` ORDER BY created_at DESC LIMIT 10";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Start the table and output the headers
    $output = "<table>";
    $output .= "<tr><th>Name</th><th>Title</th><th>Review Text</th><th>Rating</th></tr>";

    // Output each row
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $title = $row['title'];
        $review_text = $row['review_text'];
        $rating = $row['rating'];

        $output .= "<tr><td>$name</td><td>$title</td><td>$review_text</td><td>$rating</td></tr>";
    }

    $output .= "</table>";
    echo $output;
} else {
    echo "No reviews found.";
}
?>
