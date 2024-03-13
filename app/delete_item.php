<?php
include_once('./../connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted form data
    $itemName = $_POST['itemName'];

    // Delete the item from the database
    $sql = "DELETE FROM `cart` WHERE `itemName` = '$itemName'";
    if (mysqli_query($conn, $sql)) {
        echo "Item deleted successfully.";
        // Refresh the cart page after a short delay
        echo '<script>
                setTimeout(function() {
                    window.location.href = "cart.php";
                }, 1); // Delay in milliseconds
              </script>';
    } else {
        echo "Error deleting item: " . mysqli_error($conn);
    }
}
?>
