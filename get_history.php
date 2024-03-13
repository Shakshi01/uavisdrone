<?php
include_once('connect.php');

// Check if the action is to retrieve history
if (isset($_GET['action']) && $_GET['action'] === 'getHistory') {
    // Fetch history from the database
//    $sql = "SELECT * FROM `history` ORDER BY `time` DESC LIMIT 30";
  $sql = "SELECT * FROM `history` ORDER BY `url` ASC LIMIT 30";
    $result = mysqli_query($conn, $sql);

    // Prepare the HTML for the history list
    $historyList = '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {
        $url = $row['url'];
        $time = $row['time'];
        $historyList .= "<li>$url</li>";
    }
    $historyList .= '</ul>';

    // Return the history list as the response
    echo $historyList;
}
?>
